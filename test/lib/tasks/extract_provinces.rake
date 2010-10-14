desc "Fetching provinces"
task :fetch_provinces => :environment do 
  #require  'nokogiri'
  require 'open-uri'
  
  #url = "http://philpost.gov.ph/web/abra-zipcode"
  #doc = Nokogiri::HTML(open(url))

  def cleanup(str)
    s = str.gsub("<td>","")
    s = s.gsub("</td> \n","")
    s
  end
  
  logs = File.open(RAILS_ROOT + "/logs.txt", "w+")

  raw_path = File.join(RAILS_ROOT, "provinces")
  folders = Dir.entries(raw_path)
  for file in folders
    if ![".","..",".DS_Store"].include?(file)
        #puts file.inspect
        
        
        file = RAILS_ROOT + "/provinces/" + file
        fopen = File.open(file, "r")
        start = false

        provinces = []

        cnt = 1
        zipcode = ""
        town_name = ""
        prov_name = ""

        fopen.each do |l|
          if l.include?("<tr>")
            start = true
          end
          if start and l.include?("<td>")

            if cnt == 1
              zipcode = l 
            end
            if cnt == 2
              town_name = l
            end
            if cnt == 3
              prov_name = l
              cnt = 0

              provinces << [cleanup(zipcode), cleanup(town_name), cleanup(prov_name)]
            end
            cnt = cnt + 1
          end

          if l.include?("</tr>")
            start = false
          end
        end

        provinces.each do |p|
          prov = Province.find_by_name(p[2].downcase) rescue nil
          if prov.nil?
            puts "Province doesnt exists...#{p[2]}}"
            logs.write("#{p[0]}:#{p[1]}:#{p[2]}\n")
          else
            town_name = p[1].strip
            zipcode = p[0].strip
            town = Town.find(:first, :conditions => ["name = ? and province_id = ?", town_name, prov.id]) ||  \
                   Town.new
            town.name = town_name
            town.province_id = prov.id
            town.zip_code = zipcode
            puts town.inspect
            town.save
          end
          
        end
        
        
    end
  end
  
  


end