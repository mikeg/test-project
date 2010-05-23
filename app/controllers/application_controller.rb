# Filters added to this controller apply to all controllers in the application.
# Likewise, all the methods added will be available for all controllers.

class ApplicationController < ActionController::Base
  include  Authentication
  helper :all # include all helpers, all the time
  protect_from_forgery # See ActionController::RequestForgeryProtection for details

  
  before_filter :page_title

  helper_method :page_title, :current_user, :current_examination_schedule

  # Scrub sensitive parameters from your log
  # filter_parameter_logging :password

  def page_title
    @page_title = "Nursing System"
  end

end
