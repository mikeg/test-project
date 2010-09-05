class FosterNlesController < ApplicationController
  layout 'application'
  protect_from_forgery
  before_filter :require_user

  def index
    redirect_to list_examinees_foster_nles_path
  end

  def show
  end

  def list_examinees
    if current_user.role_code == 'registrar'
      if params[:so].to_s == "1"
        @applications = Applicant.find(:all, :conditions => ["school_iid = ? AND is_completed = ?", current_user.id, true])
      else
        @applications = Applicant.find(:all, :conditions => ["school_id = ? AND special_order IS NULL AND is_completed = ?", current_user.id, true])
      end
    else
      # lets assume its a foster
      if params[:so].to_s == "1"
        @applications = Applicant.find(:all, :conditions => ["foster_id = ? AND is_completed = ?", current_user.id, true])
      else
        @applications = Applicant.find(:all, :conditions => ["foster_id = ? AND special_order IS NULL AND is_completed = ?", current_user.id, true])
      end
    end
  end

  def paid_examinees
    applications = Applicant.find(:all, :conditions => ["foster_id = ? and is_completed = ? and examination_schedule_id = ?", current_user.id, true, current_examination_schedule.id])
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
    app.save
    
    render :update do |page|
      page.replace_html("special_order_div#{app.id}", :text => params[:special_order].to_s)
      page.visual_effect :highlight, "special_order_div#{app.id}", :duration => 1
    end
  end
end