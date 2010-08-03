class ReviewCentersController < ApplicationController
  
  def index
    @review_centers = ReviewCenter.find_paginated(params[:page])
  end
  
  def edit
    @review_center = ReviewCenter.find(params[:id])
  end
  
  def destroy
    tc = ReviewCenter.find(params[:id])
    tc.destroy
    flash[:notice] = "Review Center deleted."
    redirect_to review_centers_path
  end
  
  def create
    tc = ReviewCenter.new(params[:rcenter])
    tc.save
    
    flash[:notice] = "Review Center added."
    redirect_to review_centers_path
  end
  
  def update
    tc = ReviewCenter.find(params[:id])
    tc.update_attributes(params[:rcenter])
    tc.save
    flash[:notice] = "Review Center updated."
    redirect_to review_centers_path
  end
  
end