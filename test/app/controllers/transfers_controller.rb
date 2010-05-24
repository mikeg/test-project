class TransfersController < ApplicationController
  before_filter :require_user

  def index

  end

  def release
    @students = Student.search_tobe_released(params[:search], params[:page], current_user.school)
  end
  
  def accept
    @students = Student.search_tobe_accepted(params[:search], params[:page], current_user.school)
  end
  
  def accept_student
    student = Student.find(params[:id])
    student.school_id = current_user.school_id
    released_at = student.released_at
    student.released_at = nil
    student.save
    
    history = TransferHistory.new
    history.student_id = student.id
    history.school_id = student.school_id
    history.released_at = released_at
    history.accepted_at = Time.now.to_date
    history.new_school_id = current_user.school_id
    history.created_by = current_user.id
    history.save

    render :update do |page|
      page.replace_html "accept_div#{student.id}", :text => "Accepted..."
      page.visual_effect :highlight, "accept_div#{student.id}", :duration => 1
    end
    
  end

  def release_student
    student = Student.find(params[:id])
    student.released_at = Time.now.to_date
    student.save

    render :update do |page|
      page.replace_html "release_div#{student.id}", :text => "Released..."
      page.visual_effect :highlight, "release_div#{student.id}", :duration => 1
    end
    
  end

  
end

