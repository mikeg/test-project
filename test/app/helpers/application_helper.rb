# Methods added to this helper will be available to all templates in the application.
module ApplicationHelper

  def span_loader(name)
     html = "<span id='#{name}' style='display:none'>"
     html += image_tag("loader.gif")
     html += "</span>"
  end
  
  def location_is_test_center
    result = false
    
    unless current_user.location.nil?
      location = PrcLocation.find_by_code(current_user.location)
      puts location.inspect
      result = location.is_test_center?
    end
    result
    
  end
end
