namespace 'caresharing' do
  desc "Put site configs to tokyo tyrant database"
  task :put_site_configs => :environment do
    config_dir = "config/caresharing_sites"
    tt = Palmade::Cactsing.cache "caresharing"
    unless tt.nil?
      tt.open do
        Caresharing.init.sites.tt_put_dir(tt, config_dir)
      end
    else
      raise "caresharing cache not specified in config/cactsing.yml"
    end
  end

  task :pre_environment do
    ENV['SKIP_PRELOAD_STATIC'] = '1'
  end

  task :connect_db do
    if ENV.include?('CARESHARING_SITE')
      cs_key = ENV['CARESHARING_SITE'].to_sym
    else
      # kind of dangerous when running on live site, lets raise an error instead
      if ENV['RAILS_ENV'] == 'production'
        raise "Please provide a CARESHARING_SITE"
      else
        cs_key = Caresharing.sites.keys.first
      end
    end
    cs = Caresharing.sites[cs_key]
    ca = Caresharing::Account.new(cs)

    ActiveRecord::Base.unlock_connection
    ActiveRecord::Base.establish_connection(cs.connection_key)
    Caresharing::Base.use_site(cs_key)

    true
  end

  task :setup_devel => [ :pre_environment, :environment, :connect_db ] do
    Rake::Task['tmp:clear'].execute(nil)
    ActiveRecord::Base.unlock_connection
    ActiveRecord::Base.recreate_database
    ActiveRecord::Base.alter_to_utf8

    Rake::Task['caresharing:db_migrate'].execute(nil)
    Rake::Task['caresharing:setup_builtin_data'].execute(nil)
    Rake::Task['caresharing:setup_test_data'].execute(nil)

    # generate login key
    Rake::Task['caresharing:generate_login_key'].execute(nil)
  end

  task :setup_prod => [ :pre_environment, :environment, :connect_db ] do
    Rake::Task['tmp:clear'].execute(nil)

    ActiveRecord::Base.recreate_database
    ActiveRecord::Base.alter_to_utf8

    Rake::Task['caresharing:db_migrate'].execute(nil)
    Rake::Task['caresharing:setup_builtin_data'].execute(nil)
  end

  task :db_migrate => [ :pre_environment, :environment, :connect_db ] do
    MIGRATE_DIR = "db/migrate/caresharing"
    ActiveRecord::Migrator.migrate(MIGRATE_DIR, ENV["VERSION"] ? ENV["VERSION"].to_i : nil)
  end

  # for deprecation
  task :setup_builtin_data => [ :pre_environment, :environment, :connect_db ] do
    Palmade.require_gem("builtin_data_loader")
    Caresharing::Base.send(:include, Caresharing::BuiltinDataLoader::ImportMethods)

    klasses = Caresharing::App::BUILTIN_CLASSES.collect { |k| k.constantize }
    opts = { :rebuild => true, :builtin_dir => File.join(RAILS_ROOT, "db/builtin_data/caresharing") }
    klasses.each { |k| k.builtin_import(opts) }
    Rake::Task['data_migration:populate_problem_category_chronic_modules_table'].execute(nil)
  end

  # for deprecation
  task :update_builtin_data => [ ] do
    Palmade.require_gem("builtin_data_loader")
    Caresharing::Base.send(:include, Caresharing::BuiltinDataLoader::ImportMethods)

    klasses = Caresharing::App::BUILTIN_CLASSES.collect { |k| k.constantize }
    opts = { :rebuild => false, :builtin_dir => File.join(RAILS_ROOT, "db/builtin_data/caresharing") }
    klasses.each { |k| k.builtin_import(opts) }
    Rake::Task['data_migration:populate_problem_category_chronic_modules_table'].execute(nil)
  end

  task :rebuild_static => [ :environment, :connect_db ] do
    Caresharing::BuiltinData.clear_static
    Caresharing::BuiltinData.clear_cacho
    Caresharing::BuiltinData.preload_static
  end

  task :setup_test_data => [ :environment, :connect_db ] do
    require 'active_record/fixtures'

    print "Importing test fixtures..."
    fixtures = 'auxilliaries_groups,auxilliaries,clinics,doctors,doctors_groups,group_managers,groups,login_infos,people'
    fixtures.split(/,/).each do |fixture_file|
      Fixtures.create_fixtures('db/fixtures/caresharing', File.basename(fixture_file, '.*'))
    end
    print "done.\n"

    print "Updating account application..."
    LoginInfo.find(:all).each do |li|
      li.grant_access_to_this_site
      li.grant_access_to_applications([ 'base', 'clinic', 'group', 'chronic', 'waarneming' ])
      li.export_roles_to_account
    end
    print "done.\n"

    # enable chronic modules
    ChronicModule.find(:all).each do |cm|
      cm.enabled = true
      cm.save!
    end
    ChronicModule.reload_static_instances

    print "Importing sample COV file..."
    Rake::Task['caresharing:import_sample_patients'].execute(nil)
    print "done.\n"
  end

  task :import_sample_patients => [ :environment, :connect_db ] do
    dokie = Doctor.find(1)

    print "Import repo patients..."
    RepoPatient.import_cov(dokie, File.read("#{RAILS_ROOT}/db/data/caresharing/sample_patients.txt"))
    print "done.\n"

    diabetes = ChronicModule.by_code('diabetes')
    vascular = ChronicModule.by_code('vascular')

    print "Importing repo patients to doctor's patient list...["
    0.upto(150) { |i|
      repo = dokie.repo_patients[i]

      Caresharing::Base.transaction do
        if repo.person.nil?
          p = Person.create_new_from_repo(repo)
          unless p.nil?
            pt = p.roles_create(:patient, :with_doctor => dokie)
            pt.save!

            case (i % 3)
            when 0
              # both modules
              pt.enroll_to_module(diabetes)
              pt.enroll_to_module(vascular)
            when 1
              # diabetes only
              pt.enroll_to_module(diabetes)
            when 2
              # vascular only
              pt.enroll_to_module(vascular)
            end

            print "#{p.fullname} "
          end
        end
      end
    }

    print "] done.\n"
  end

  task :generate_login_key => :environment do
    LoginInfo.find(:all).each do |li|
      uid = UUID.md5_create(UUID_DNS_NAMESPACE, li.login)
      li.login_key = uid.to_s.split("-").join("")
      li.save!
    end
  end

end
