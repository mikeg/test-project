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

  def list_examinees
    @examinees = Examinee.list_examinees(current_user)
  end

  def list_students
    @examinees = Examinee.search_noa_students(params[:search], params[:page])
  end

  def perrc
    examinee = Examinee.find(params[:id])
    examinee.prc_location_id = params[:prc_location_id]
    examinee.perrc = params[:perrc]

    unless params[:prc_location_id].blank?
      examinee.save
    
      tc = PrcLocation.find(params[:prc_location_id])
      test_center_and_perrc = "#{tc.region} - #{params[:perrc]}"
      render :update do |page|
        page.replace_html "perrc_div#{examinee.id}", :partial => "noas/perrc", :locals => {:str => test_center_and_perrc, :examinee => examinee }
        page.visual_effect :highlight, "perrc_div#{examinee.id}", :duration => 1
      end
    else
      render :nothing => true
    end
    
  end

  def load_test_centers
    @test_centers = [["Choose Below",'']]
    testcenters = PrcLocation.find(:all, :conditions => ["is_test_center = 1"])
    testcenters.each do |tc|
      @test_centers << [tc.region.upcase , tc.id]
    end
  end
end