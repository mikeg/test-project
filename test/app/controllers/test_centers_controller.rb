class TestCentersController < ApplicationController
  
  def index
    @test_centers = ReviewSchool.find_paginated(params[:page])
  end
  
  def edit
    @test_center = ReviewSchool.find(params[:id])
  end
  
  def destroy
    tc = ReviewSchool.find(params[:id])
    tc.destroy
    ActionLog.newlog(controller_name, action_name, params, current_user)
    flash[:notice] = "Review School deleted."
    redirect_to test_centers_path
  end
  
  
  def create
    tc = ReviewSchool.new(params[:rschool])
    tc.save
    
    ActionLog.newlog(controller_name, action_name, params, current_user)
    flash[:notice] = "Review School added."
    redirect_to test_centers_path
  end
  
  def update
    tc = ReviewSchool.find(params[:id])
    tc.update_attributes(params[:rschool])
    tc.save
    ActionLog.newlog(controller_name, action_name, params, current_user)
    flash[:notice] = "Review School updated."
    redirect_to test_centers_path
  end
  
end