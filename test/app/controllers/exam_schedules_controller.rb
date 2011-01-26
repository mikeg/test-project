class ExamSchedulesController < ApplicationController
  layout 'application'
  protect_from_forgery

  before_filter :require_user
  before_filter :courses_for_select, :only => [:new, :edit]

  def index
    @exam_schedules = ExaminationSchedule.find(:all, :order => "schedule DESC")
  end

  def new
  end
  
  def create
    exam_schedule = ExaminationSchedule.new
    exam_schedule.schedule = params[:date].to_date
    exam_schedule.course_id = params[:course_id]
    exam_schedule.created_by = current_user.id
    exam_schedule.updated_by = current_user.id

    ActionLog.newlog(controller_name, action_name, exam_schedule.changes, current_user)
    exam_schedule.save
    redirect_to exam_schedules_path
  end
  
  def edit
    @schedule = ExaminationSchedule.find(params[:id])
  end
  
  def destroy
    exam_schedule = ExaminationSchedule.find(params[:id])
    applicants = Applicant.find(:all, :conditions => ["examination_schedule_id = ?", exam_schedule.id])
    
    unless applicants.empty?
      flash[:error] = "Error deleting the schedule. There are currently students are scheduled for this date."
    else
      exam_schedule.destroy
      ActionLog.newlog(controller_name, action_name, params, current_user)
      flash[:notice] = "Successfully deleted schedule."
    end
      redirect_to exam_schedules_path
  end
  
  
  private
  
  def courses_for_select
    @nursing = Course.find_by_code("4018")
        
    courses = Course.find(:all, :order => "name asc")
    @courses = []
    courses.each do |c|
      @courses << [c.name, c.id]
    end
  end
end