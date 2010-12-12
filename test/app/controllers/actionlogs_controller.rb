class ActionlogsController < ApplicationController
  before_filter :require_user
  
  def index
    @logs = ActionLog.get_logs(current_user, params[:page])
  end
end