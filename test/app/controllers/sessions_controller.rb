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
    @user = User.find(:first, :conditions => ["is_active='1' and username=? and password=?", params[:user]['username'], params[:user]['password']]) rescue nil
    unless @user.nil?
      create_session
      redirect_to dashboard_path
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