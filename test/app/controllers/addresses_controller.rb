class AddressesController < ApplicationController
  layout 'application'
  protect_from_forgery

  
  def index
    @regions = Region.find(:all)
    @provinces = Province.find(:all)
  end

  def show_provinces
    @region = Region.find(params[:region_id])
    @provinces = Province.find(:all, :conditions => ["region_id = ?", params[:region_id]])
    render :update do |page|
      page.replace_html("provinces", :partial => 'addresses/provinces_row')
      page.replace_html("towns", "")
      page.visual_effect :highlight, "provinces", :duration => 0.5
    end
  end

  def show_towns
    @province = Province.find(params[:province_id])
    @towns = Town.find(:all, :conditions => ["province_id = ?", params[:province_id]])
    render :update do |page|
      page.replace_html("towns", :partial => 'addresses/towns_row')
      page.visual_effect :highlight, "towns", :duration => 0.5
    end
  end
  
  def add_provinces
    @region = Region.find(params[:region_id])
    if request.post?
      p = Province.new
      p.name = params[:name]
      p.region_id = params[:region_id]
      p.area_code = params[:area_code]
      p.save

      @region = Region.find(params[:region_id])
      @provinces = Province.find(:all, :conditions => ["region_id = ?", @region.id])
      render :update do |page|
        page.replace_html("provinces", :partial => 'addresses/provinces_row')
        page.visual_effect :highlight, "provinces", :duration => 0.5
      end


    else
      render :update do |page|
        page.replace_html("add_province", :partial => 'addresses/add_province')
        page.visual_effect :highlight, "add_province", :duration => 0.5
      end
    end
  end

  def add_towns
    @province = Province.find(params[:province_id])
    if request.post?
      p = Town.new
      p.name = params[:name]
      p.province_id = params[:province_id]
      p.zip_code = params[:zip_code]
      p.save

      @province = Province.find(params[:province_id])
      @towns = Town.find(:all, :conditions => ["province_id = ?", @province.id])
      render :update do |page|
        page.replace_html("towns", :partial => 'addresses/towns_row')
        page.visual_effect :highlight, "towns", :duration => 0.5
      end

    else
      render :update do |page|
        page.replace_html("add_town", :partial => 'addresses/add_town')
        page.visual_effect :highlight, "add_town", :duration => 0.5
      end
    end
  end


end