class ChedrecognitionsController < ApplicationController
  before_filter :require_user


  def index
    @school = current_user.school
    load_regions(@school)
  end

  def chedreg
    @school = current_user.school
    @school.chedreg_boardres = params[:chedreg]

    ActionLog.newlog(controller_name, action_name, @school.changes, current_user)
    @school.save
    redirect_to chedrecognitions_path
  end
  
  def update
    @school = School.find(params[:id])
    @school.street = params[:school]["street"]
    @school.zip_code = params[:school]["zip_code"]
    @school.area_code = params[:school]["area_code"]
    @school.prc_school_code = params[:school]["prc_school_code"]
    @school.name = params[:school]["name"]
    @school.region_id = params[:region_id]
    @school.province_id = params[:province_id]
    @school.town_id = params[:town_id]

    ActionLog.newlog(controller_name, action_name, @school.changes, current_user)
    @school.save
    redirect_to chedrecognitions_path
  end
  
  def update_province_div
    @region, @provinces, @towns = [], [], []
    @region = Region.find(params[:region_id])

    provinces = @region.provinces.find(:all, :order => "name")
    provinces.each do |p|
      @provinces << [p.name.titleize, p.id]
    end

    provinces.first.towns.find(:all, :order => "name").each do |t|
      @towns << [t.name.titleize, t.id]
    end

    render :update do |page|
      page.replace_html("province_div", :partial => 'province_select', :locals => {:school => current_user.school})
      page.visual_effect :highlight, "province_div", :duration => 1
      page.replace_html("town_div", :partial => 'town_select', :locals => {:school => current_user.school})
      page.visual_effect :highlight, "town_div", :duration => 1
    end
  end
  
  def update_town_div
    @towns = []
    @province = Province.find(params[:province_id])
    @province.towns.find(:all, :order => "name").each do |t|
      @towns << [t.name.titleize, t.id]
    end
    render :update do |page|
      page.replace_html("town_div", :partial => 'town_select', :locals => {:school => current_user.school})
      page.visual_effect :highlight, "town_div", :duration => 1
    end
  end

  
  def load_regions(school)
    @regions, @provinces, @towns = [], [], []
    regions = Region.find(:all, :order => "name")
    regions.each do |r|
      @regions << [r.name.upcase, r.id]
    end
    
    
    unless school.region.nil?
      region = school.region
      provinces = region.provinces
      provinces.find(:all, :order => "name").each do |p|
        @provinces << [ p.name.titleize, p.id]
      end
      
      unless school.province.nil?
        province = school.province
        towns = province.towns
        towns.find(:all, :order => "name").each do |t|
          @towns << [t.name.titleize, t.id]
        end
      end
    else

        unless regions.first.provinces.empty?
          regions.first.provinces.find(:all, :order => "name").each do |p|
            @provinces << [p.name.titleize, p.id]
          end
          unless regions.first.provinces.first.towns.empty?
            regions.first.provinces.first.towns.find(:all, :order => "name").each do |t|
              @towns << [t.name.titleize, t.id]
            end unless regions.first.provinces
          end
        end
    end
  end
  
end

