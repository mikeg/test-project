class UsersController < ApplicationController
  before_filter :require_user
  
  before_filter :load_prc_locations, :only => [:new, :edit]
  before_filter :load_roles, :only => [:new, :edit]

  def index
    @users = User.find(:all, :conditions => ["role_code !=  'admin'"])
  end
  
  def new
    if request.post?
      @user = User.new(params[:user])
      @user.role_code = params[:role_code]
      @user.school_id = params[:school_id] unless params[:school_id].nil?
      @user.created_by = current_user
      @user.save
      redirect_to users_path
    end
  end

  def update_schools_div
    if params[:role_code] == "registrar"
      @schools = []
      School.find(:all, :order => "name").each do |s|
        @schools << [s.name, s.id]
      end

      render :update do |page|
        page.replace_html("schools_div", :partial => 'schools_select')
        page.visual_effect :highlight, "schools_div", :duration => 1
      end
    else
      render :update do |page|
        page.replace_html("schools_div", "")
      end
    end
  end
  
  private
  def load_prc_locations
    @prc_locations = [['-- none --']]
    prc_locations = PrcLocation.find(:all)
    prc_locations.each do |p|
      @prc_locations << [ p.region, p.code]
    end
    @prc_locations
  end
  
  def load_roles
    @roles = [['Select Role']]
    roles = Role.find(:all, :conditions => ["role_code != 'admin'"])
    roles.each do |r|
      @roles << [ r.role_description, r.role_code]
    end
    @roles
  end
  
end

