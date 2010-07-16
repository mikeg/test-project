namespace :schools do 
  task :update => :environment do
    
    schools = OldSchool.find(:all)
    schools.each do |school|
      puts "processing #{school.School_Name} ..."
      address = OldAddress.find(school.Address_ID)

      region = Region.find(:first, :conditions => ["LOWER(name) = ?", "#{address.Region.downcase.strip}"]) || Region.new({ :name => "#{address.Region.downcase.strip}" })
      region.name = "#{address.Region.downcase.strip}"
      region.save
      
      province = Province.find(:first, :conditions => ["LOWER(name) = ?", "#{address.Province.downcase.strip}"]) || Province.new({ :name => "#{address.Province.downcase.strip}", :region_id => region.id, :area_code => address.Area_Code })
      province.name = "#{address.Province.downcase.strip}"
      province.region_id  = region.id
      province.area_code = address.Area_Code
      province.save
      
      town = Town.find(:first, :conditions => ["LOWER(name) = ?", "#{address.City_Town.downcase.strip}"]) || Town.new({ :name => "#{address.City_Town.downcase.strip}", :province_id => province.id, :zip_code => address.Zip_Code })
      town.name = "#{address.City_Town.downcase.strip}"
      town.province_id = province.id
      town.zip_code = address.Zip_Code
#      town.rurban_code = address.Rurban_Code
      town.save

      newschool = School.new
      schoolname = school.School_Name.gsub("\235", "ñ")
      newschool.name = schoolname.downcase.strip
      newschool.prc_school_code = school.PRC_School_Code
      
      newschool.region_id = region.id
      newschool.province_id = province.id
      newschool.town_id = town.id
      newschool.is_active = 1
      newschool.rurban_code = address.Rurban_Code.strip
      newschool.save
    end
  end
end