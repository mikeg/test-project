class NlesController < ApplicationController
  layout 'application'
  protect_from_forgery
  before_filter :require_user

  def index
  end

  def show
  end

  def list_examinees
    if params[:so].blank?
      @applications = Applicant.find(:all, :conditions => ["school_id = ?", current_user.school_id])
    else
      if params[:so] == "yes"
        @applications = Applicant.find(:all, :conditions => ["school_id = ? AND special_order IS NOT NULL AND is_completed = ?", current_user.school_id, true])
      else
        @applications = Applicant.find(:all, :conditions => ["school_id = ? AND special_order IS NULL AND is_completed = ?", current_user.school_id, false])
      end
    end
  end

  def paid_examinees
    applications = Applicant.find(:all, :conditions => ["school_id = ? and is_completed = ? and examination_schedule_id = ?", current_user.school_id, true, current_examination_schedule.id])
    app_ids = applications.map(&:id)
    @payments = Payment.find(:all, :conditions => ["application_id IN (?)", app_ids])
  end
  
  def testing_center
    @test_centers = TestCenter.find(:all)
  end
  
  def results
    students = Student.find(:all, :conditions => ["school_id = ?", current_user.school_id])
    student_ids = students.map(&:id)
    @examinees = Examinee.find(:all, :conditions => ["student_id in (?) and examination_schedule_id = ?", student_ids, current_examination_schedule.id])
  end

  def update_special_order
    app = Applicant.find(params[:id])
    app.special_order = params[:special_order]

    ActionLog.newlog(controller_name, action_name, app.changes, current_user)
    app.save
    
    render :update do |page|
      page.replace_html("special_order_div#{app.id}", :text => params[:special_order].to_s)
      page.visual_effect :highlight, "special_order_div#{app.id}", :duration => 1
    end
  end
end