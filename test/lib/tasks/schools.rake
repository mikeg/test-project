namespace :schools do 
  task :update => :environment do
    
    schools = OldSchool.find(:all)
    schools.each do |school|
      puts "processing #{school.School_Name} ..."
      address = OldAddress.find(school.Address_ID)

      region = Region.find(:first, :conditions => ["LOWER(name) = ?", "#{address.Region.downcase}"]) || Region.new({ :name => "#{address.Region.downcase}" })
      region.name = "#{address.Region.downcase}"
      region.save
      
      province = Province.find(:first, :conditions => ["LOWER(name) = ?", "#{address.Province.downcase}"]) || Province.new({ :name => "#{address.Province.downcase}", :region_id => region.id, :area_code => address.Area_Code })
      province.name = "#{address.Province.downcase}"
      province.region_id  = region.id
      province.area_code = address.Area_Code
      province.save
      
      town = Town.find(:first, :conditions => ["LOWER(name) = ?", "#{address.City_Town.downcase}"]) || Town.new({ :name => "#{address.City_Town.downcase}", :province_id => province.id, :zip_code => address.Zip_Code })
      town.name = "#{address.City_Town.downcase}"
      town.province_id = province.id
      town.zip_code = address.Zip_Code
      town.save

      newschool = School.new
      newschool.name = school.School_Name.downcase
      newschool.prc_school_code = school.PRC_School_Code
      
      newschool.region_id = region.id
      newschool.province_id = province.id
      newschool.town_id = town.id
      newschool.zip_code = address.Zip_Code
      newschool.area_code = address.Area_Code
      newschool.rurban_code = address.Rurban_Code
      newschool.is_active = 1
      newschool.save
    end
  end
end