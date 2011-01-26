class AddressesController < ApplicationController
  layout 'application'
  protect_from_forgery
  before_filter :require_user

  def add_regions
    render :update do |page|
      page.replace_html("add_region_div", :partial => "add_region")
      page.visual_effect :highlight, "add_region_div", :duration => 0.5
    end
  end

  def save_regions
    region = Region.find_by_name(params[:region_name].downcase) || Region.new
    region.name = params[:region_name].downcase
    ActionLog.newlog(controller_name, action_name, region.changes, current_user)

    regions = Region.find(:all, :order => "name")
    region.save

    render :update do |page|
      page.replace_html("add_region_div", :text => "")
      page.replace_html("all_regions", :partial => "regions", :locals => { :regions => regions })
      page.visual_effect :highlight, "all_regions", :duration => 0.5
    end
  end
  
  def delete_region
    region = Region.find(params[:id])
    region.destroy
    ActionLog.newlog(controller_name, action_name, params, current_user)
    
    render :update do |page|
      page.replace_html("region_row_#{params[:id]}", :nothing => true)
      page.replace_html("provinces", "")
      page.replace_html("towns", "")
      page.visual_effect :highlight, "region_row_#{params[:id]}", :duration => 0.5
    end
  end

  def update_province
    duplicate_province = Province.find(:all, :conditions => ["name = ? and id != ?", params[:name].downcase, params[:id] ])

    if duplicate_province.empty?
      province = Province.find(params[:id])
      province.name = params[:name]
      province.area_code = params[:area_code]

      ActionLog.newlog(controller_name, action_name, province.changes, current_user)
      province.save
      render :update do |page|
        page.replace_html("province_row_#{params[:id]}", :partial => "province_row", :locals => {:province => province})
        page.visual_effect :highlight, "province_row_#{params[:id]}", :duration => 0.5
      end
    else
      render :update do |page|
        page << "alert('duplicate province');"
      end
    end
  end

  def delete_town
    town = Town.find(params[:id])
    town.destroy
    ActionLog.newlog(controller_name, action_name, params, current_user)
    
    render :update do |page|
      page.replace_html("town_row_#{params[:id]}", :nothing => true)
    end
  end

  def update_region
    duplicate_region = Region.find(:all, :conditions => ["name = ? and id != ?", params[:region_name].downcase, params[:id] ])

    if duplicate_region.empty?
      region = Region.find(params[:id])
      region.name = params[:region_name]

      ActionLog.newlog(controller_name, action_name, region.changes, current_user)
      region.save
      render :update do |page|
        page.replace_html("region_row_#{params[:id]}", :partial => "region_row", :locals => {:region => region})
        page.visual_effect :highlight, "region_row_#{params[:id]}", :duration => 0.5
      end
    else
      render :update do |page|
        page << "alert('duplicate region');"
      end
    end
  end

  def update_town
    duplicate_town = Town.find(:all, :conditions => ["name = ? and id != ?", params[:name].downcase, params[:id] ])

    if duplicate_town.empty?
      town = Town.find(params[:id])
      town.name = params[:name]
      town.zip_code = params[:zip_code]

      ActionLog.newlog(controller_name, action_name, town.changes, current_user)
      town.save

      render :update do |page|
        page.replace_html("town_row_#{params[:id]}", :partial => "town_row", :locals => {:town => town })
        page.visual_effect :highlight, "town_row_#{params[:id]}", :duration => 0.5
      end
    else
      render :update do |page|
        page << "alert('duplicate region');"
      end
    end
  end
  
  def show_region_row
    region = Region.find(params[:id])
    render :update do |page|
      page.replace_html("region_row_#{params[:id]}", :partial => "region_row", :locals => {:region => region})
      page.visual_effect :highlight, "region_row_#{params[:id]}", :duration => 0.5
    end
  end

  def show_province_row
    province = Province.find(params[:id])
    render :update do |page|
      page.replace_html("province_row_#{params[:id]}", :partial => "province_row", :locals => {:province => province })
      page.visual_effect :highlight, "province_row_#{params[:id]}", :duration => 0.5
    end
  end

  def show_town_row
    town = Town.find(params[:id])
    render :update do |page|
      page.replace_html("town_row_#{params[:id]}", :partial => "town_row", :locals => {:town => town })
      page.visual_effect :highlight, "town_row_#{params[:id]}", :duration => 0.5
    end
  end
  
  def edit_region
    region = Region.find(params[:id])
    render :update do |page|
      page.replace_html("region_row_#{params[:id]}", :partial => "edit_region", :locals => {:region => region})
      page.visual_effect :highlight, "region_row_#{params[:id]}", :duration => 0.5
    end
  end

  def edit_province
    province = Province.find(params[:id])
    render :update do |page|
      page.replace_html("province_row_#{params[:id]}", :partial => "edit_province", :locals => {:province => province})
      page.visual_effect :highlight, "province_row_#{params[:id]}", :duration => 0.5
    end
  end

  def edit_town
    town = Town.find(params[:id])
    render :update do |page|
      page.replace_html("town_row_#{params[:id]}", :partial => "edit_town", :locals => {:town => town})
      page.visual_effect :highlight, "town_row_#{params[:id]}", :duration => 0.5
    end
  end
  
  def index
    @regions = Region.find(:all, :order => "name")
    @provinces = Province.find(:all, :order => "name")
  end

  def show_regions
    regions = Region.find(:all, :order => "name")

    render :update do |page|
      page.replace_html("add_region_div", "")
      page.replace_html("all_regions", :partial => 'regions', :locals => { :regions => regions })
      page.visual_effect :highlight, "all_regions", :duration => 0.5
    end
  end

  def show_provinces
    @region = Region.find(params[:region_id])
    @provinces = Province.find(:all, :conditions => ["region_id = ?", params[:region_id]], :order => "name")
    render :update do |page|
      page.replace_html("provinces", :partial => 'addresses/provinces_row')
      page.replace_html("towns", "")
      page.visual_effect :highlight, "provinces", :duration => 0.5
    end
  end

  def show_towns
    @province = Province.find(params[:province_id])
    @towns = Town.find(:all, :conditions => ["province_id = ?", params[:province_id]], :order => "name")
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

      ActionLog.newlog(controller_name, action_name, p.changes, current_user)
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

      ActionLog.newlog(controller_name, action_name, p.changes, current_user)
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