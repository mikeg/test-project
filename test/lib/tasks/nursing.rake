namespace 'nursing' do

  task :db_connect => :environment do
    ActiveRecord::Base.establish_connection(RAILS_ENV)
  end

  task :update_builtin_data => [:environment, :db_connect] do
    puts "** going to update builtin data"
    foreach_builtin_data do |klazz_name, data|
      puts "+++processing #{klazz_name}"
      klazz = klazz_name.singularize.camelize.constantize
      puts data.class
      data.each_pair do |code, hash_values|
        puts "#{code} = #{hash_values}"
#        puts hash_values.class
        model = klazz.find(:first, :conditions => ["#{code} = ?", hash_values])
        if model.nil?
          hash_values.merge!({ "#{code}" => hash_values})
          klazz.create(hash_values)
        else
          model.update_attributes(hash_values)
        end
      end
    end
    puts "** done"
  end

  def foreach_builtin_data(parent = nil)
      path = File.join(RAILS_ROOT, 'db', 'builtin_data', (parent || ''))
      subs = []
      puts "** in path #{path}"
      Dir.foreach(path) do |filename|
        puts "++ processing file #{filename}"
        if File.stat(File.join(path, filename)).directory? && ![".", ".."].include?(filename)
          subs << filename
        else
          names = filename.split('.')
          next if names.empty? || names.last != 'yml'
          if block_given?
            klazz_name = File.basename(File.join(path, filename), ".yml")
            if parent
              klazz_name = "#{parent.camelize}::#{klazz_name.camelize}"
            end
            data = YAML::load(File.open(File.join(path, filename)))
            yield(klazz_name, data)
          end
        end
      end

      unless subs.empty?
        for sub in subs
          foreach_builtin_data(sub) do |klazz_name, data|
            yield(klazz_name, data)
          end
        end
      end

    end

end

