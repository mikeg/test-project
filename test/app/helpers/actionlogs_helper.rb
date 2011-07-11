# Methods added to this helper will be available to all templates in the application.
module ActionlogsHelper

  def display_formated_logs(log)
    excluded = ["updated_at", "created_at", "updated_by", "_method", "authenticity_token"]
    html = ""

    unless log.params.empty?
      log.params.each do |h|
        action_str = h[0].to_s rescue ''
        if !excluded.include?(action_str)
          html += h[0].to_s rescue ''
          html += " : "
          html += h[1][0].to_s rescue ''
          html += " to "
          html += h[1][1].to_s rescue ''
          html += "<br/>"
        end
      end
    end

    html
  end

end
