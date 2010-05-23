class DashboardController < ApplicationController
  layout 'application'
  before_filter :require_user
  protect_from_forgery



  def index
  end
  def show
  end

end