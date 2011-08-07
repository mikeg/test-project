class SessionsController < ApplicationController
  layout 'session'
  protect_from_forgery
  before_filter :require_user,    :only => %w(destroy)

  def index
    if !session[:user_id].nil?
      redirect_to dashboard_path
    end
  end

  def show
    redirect_to new_sessions_path
  end

  def new
  end

  def authenticate
    @user = User.find(:first, :conditions => ["username=? and password=?", params[:user]['username'], params[:user]['password']]) rescue nil
    unless @user.nil?
      if @user.is_active?
        create_session
        if @user.username == "admin"
          redirect_to schools_path
        else
          redirect_to dashboard_path
        end
      else
        flash[:error] = "Account Temporarily On-Hold. Please contact BoN Administrator. Thank You."
        redirect_to index_sessions_path
      end
    else
      flash[:error] = "Invalid login"
      redirect_to index_sessions_path
    end
  end

  def stop
    reset_session
    redirect_to sessions_path
  end

  private

  def create_session
    session[:user] = @user
  end

end