class PrintersController < ApplicationController
  layout 'application', :excep => [:noa]
  protect_from_forgery
  before_filter :require_user

  def noa
    @examinee = Examinee.find(params[:id])
    @student = Student.find(@examinee.student_id)
    render :layout => false
  end
end