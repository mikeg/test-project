class TestCentersController < ApplicationController
  
  def index
    @test_centers = TestCenter.find(:all)
  end
end