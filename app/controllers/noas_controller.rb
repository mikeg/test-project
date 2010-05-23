class NoasController < ApplicationController
  layout 'application'
  protect_from_forgery
  before_filter :require_user

  before_filter :load_test_centers, :only => [:list_students]
  def index
  end
  
  def show
  end

  def history
    @examinees = Examinee.find(:all, :conditions => ["perrc IS NOT NULL"])
  end
  

  def list_students
    @examinees = Examinee.search_noa_students(params[:search], params[:page])
  end

  def perrc
    examinee = Examinee.find(params[:id])
    examinee.test_center_id = params[:test_center]
    examinee.perrc = params[:perrc]
    examinee.save
    
    tc = TestCenter.find(params[:test_center])
    test_center_and_perrc = "#{tc.name} - #{params[:perrc]}"
    
    render :update do |page|
      page.replace_html "perrc_div#{examinee.id}", :text => test_center_and_perrc
      page.visual_effect :highlight, "perrc_div#{examinee.id}", :duration => 1
    end
  end

  def load_test_centers
    @test_centers = []
    testcenters = TestCenter.find(:all)
    testcenters.each do |tc|
      @test_centers << [tc.name , tc.id]
    end
  end
end