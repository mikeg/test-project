# Methods added to this helper will be available to all templates in the application.
module ActionlogsHelper

  def display_formated_logs(log)
    excluded = ["updated_at", "created_at", "updated_by", "_method", "authenticity_token"]
    html = ""

    unless log.params.empty?
      log.params.each do |h|
        if !excluded.include?(h[0].to_s)
          html += h[0].to_s
          html += " : "
          html += h[1][0].to_s
          html += " to "
          html += h[1][1].to_s
          html += "<br/>"
        end
      end
    end

    html
  end

end
