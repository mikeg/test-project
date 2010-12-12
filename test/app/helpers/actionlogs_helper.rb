# Methods added to this helper will be available to all templates in the application.
module ActionlogsHelper

  def display_formated_logs(params)
    excluded = ['authenticity_token', 'commit']
    puts params.inspect
     html = ""
     params.each do |h|
       if !excluded.include?(h[0])
         html += "#{h[0]} : #{h[1]}"
         html += "<br/>"
       end
       puts h.inspect
     end
     html
  end

end
