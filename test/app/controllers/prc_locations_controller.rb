class PrcLocationsController < ApplicationController
  before_filter :require_user

  def index
    @prc = PrcLocation.find(:all)
  end
  
  def destroy
    @prc = PrcLocation.find(params[:id])
    @prc.destroy
    redirect_to prc_locations_path
  end
  
  def new
    
    if request.post?
      @prc = PrcLocation.new(params[:prc])
      @prc.created_by = current_user
      @prc.save

      if !@prc.errors.empty?
        flash[:error] = @prc.errors.first[1]
      end
      redirect_to prc_locations_path
    end
  end

  def update_province_select
    @region, @provinces, @towns = [], [], []

    @region = Region.find(params[:region_id])

    @region.provinces.each do |p|
      @provinces << [p.name, p.id]
    end

    @region.provinces.first.towns.each do |t|
      @towns << [t.name, t.id]
    end
    
    render :update do |page|
      page.replace_html("province_div", :partial => 'prc_locations/province_select')
      page.visual_effect :highlight, "province_div", :duration => 0.5
      page.replace_html("town_div", :partial => 'prc_locations/town_select')
      page.visual_effect :highlight, "town_div", :duration => 0.5
    end

  end

  def update_town_select
    @towns = []
    @province = Province.find(params[:province_id])

    @province.towns.each do |t|
      @towns << [t.name, t.id]
    end
    
    render :update do |page|
      page.replace_html("town_div", :partial => 'prc_locations/town_select')
      page.visual_effect :highlight, "town_div", :duration => 0.5
    end
  
  end


end

