class TestCentersController < ApplicationController
  
  def index
    @test_centers = ReviewSchool.find_paginated(params[:page])
  end
end