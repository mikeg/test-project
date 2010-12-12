class SchoolsController < ApplicationController
  layout 'application'
  protect_from_forgery
  before_filter :require_user

  def search 
    @schools = School.search(params[:search], params[:page])
  end
  
  def index
    @schools = School.search(params[:search], params[:page])
  end
  
  def show
  end

  def new
    if request.post?
      school = School.new()
      school.name = params[:name]
      school.street = params[:street]
      school.prc_school_code = params[:prc_school_code]
      school.is_active = params[:status]
      school.created_by = current_user.id
      school.rurban_code = params[:rurbancode]

      region = Region.find(params[:region])
      province = Province.find(params[:province])
      town = Town.find(params[:town])

      school.region_id = region.id
      school.province_id = province.id
      school.town_id = town.id
      school.save!
      
      ActionLog.newlog(controller_name, action_name, params, current_user)
      redirect_to schools_path
    else
      @school = School.new
      @regions = [["Choose below",""]]
      @provinces = [["Choose below",""]]
      @towns = [["Choose below",""]]
      
      regions = Region.find(:all, :order => "name ASC")
      regions.each do |r|
        @regions << [ r.name.upcase, r.id ]
      end

      regions.first.provinces.each do |r|
        @provinces << [ r.name.titleize, r.id ]
      end unless regions.first.provinces.empty?

      regions.first.provinces.first.towns.each do |r|
        @towns << [ r.name.titleize, r.id ]
      end unless regions.first.provinces.first.nil?
    end
        
  end

  def update
    if request.put?
      school = School.find(params[:id])
      school.name = params[:name]
      school.street = params[:street]
      school.prc_school_code = params[:prc_school_code]
      school.is_active = params[:status]

#      school.area_code = params[:areacode] 
#      school.zip_code = params[:zipcode]
      school.rurban_code = params[:rurbancode]

      school.region = Region.find(params[:region])
      school.province = Province.find(params[:province])
      school.town = Town.find(params[:town])

      school.updated_by = current_user.id
      school.updated_at = Time.now.to_date
      school.save

      ActionLog.newlog(controller_name, action_name, params, current_user)
      redirect_to schools_url
    end
  end
  
  def show_users
    @school = School.find(params[:id])
    school_users = SchoolUser.find(:all, :conditions => ["school_id = ?", params[:id]])
    school_users_ids = school_users.map(&:user_id)
    @school_users = User.find(:all, :conditions => ["id in (?)", school_users_ids])
  end
  
  def adduser
    @school = School.find(params[:school_id])
    if request.post?
      role = Role.find(:first, :conditions => ["role_code='registrar'"])
      user = User.new
      user.school_id = @school.id
      user.firstname = params[:firstname]
      user.lastname = params[:lastname]
      user.username = params[:username]
      user.is_active = params[:status]
      user.password = Password.create(params[:password])
      user.role_id = role.id
      user.save

      school_user = SchoolUser.new
      school_user.school_id = @school.id
      school_user.user_id = user.id
      school_user.save

      ActionLog.newlog(controller_name, action_name, params, current_user)
      redirect_to show_users_schools_path(:id => @school.id)
    end
  end
  
  def destroy
    school = School.find(params[:id])

    if school.students.empty?
      school.destroy
      flash[:notice] = "School successfully deleted."
      
      ActionLog.newlog(controller_name, action_name, params, current_user)
    else
      flash[:error] = "Cannot delete school. School has existing students."
    end
      redirect_to schools_path
  end
  
  def edit 
    @school = School.find(params[:id])
    @regions = []
    @provinces = []
    @towns = []
    regions = Region.find(:all, :order => "name ASC")
    regions.each do |r|
      @regions << [ r.name.upcase, r.id ]
    end

#    provinces = Province.find(:all, :order => "name ASC")
#    provinces.each do |r|
#      @provinces << [ r.name, r.id ]
#    end

    unless @school.region_id.nil?
      provinces = @school.region.provinces
    else
      provinces = region.first.provinces
    end
    provinces.each do |p|
      @provinces << [ p.name.titleize, p.id ]
    end

    towns = Town.find(:all, :order => "name ASC")
    towns.each do |r|
      @towns << [ r.name.titleize, r.id ]
    end
  end

  def update_province_select
    @region, @provinces, @towns = [], [], []

    @region = Region.find(params[:region_id])

    @region.provinces.find(:all, :order => "name").each do |p|
      @provinces << [p.name.titleize.titleize, p.id]
    end

    @region.provinces.first.towns.find(:all, :order => "name").each do |t|
      @towns << [t.name.titleize.titleize, t.id]
    end
    
    render :update do |page|
      page.replace_html("list_province", :partial => 'schools/province_select')
      page.visual_effect :highlight, "list_province", :duration => 0.5
      page.replace_html("town_div", :partial => 'schools/town_select')
      page.visual_effect :highlight, "town_div", :duration => 0.5
    end

  end

  def update_town_select
    @towns = []
    @province = Province.find(params[:province_id])
    towns = @province.towns.find(:all, :order => "name")
    towns.each do |t|
      @towns << [t.name.titleize, t.id]
    end
    
    render :update do |page|
      page.replace_html("town_div", :partial => "schools/town_select")
      page.visual_effect :highlight, "town_div", :duration => 0.5
    end
  
  end

  
end