class CashiersController < ApplicationController
  layout 'application'
  protect_from_forgery
  before_filter :require_user
  
  before_filter :load_prc_locations, :only => [:new, :edit]

  def history
    @payments = Payment.find(:all, 
                             :conditions => ["created_by = ? and examination_schedule_id = ?", current_user.id, current_examination_schedule.id],
                             :order => "created_at DESC")
  end

  def list_students
    @applicants = Applicant.for_payment(params[:search], params[:page])
  end

  def index
    role = Role.find(:first, :conditions => "role_code='cashier'")
    @cashiers = User.find(:all, :conditions => ["role_id=?", role.id])
  end

  def edit
    @cashier = User.find(params[:id])
    selected_location = Province.find(@cashier.location)
    @selected_province = [selected_location.name, selected_location.id]
  end
  
  def update
    User.update(params[:id], params[:user])
    redirect_to cashiers_path
  end
  
  def pay
    app = Applicant.find(params[:id])
    app.status = true
    app.save

    price = Price.find_by_examination_type(app.examination_type)
    payment = Payment.new
    payment.application_id = params[:id]
    payment.student_id = app.student_id
    payment.or_number = params[:or_number]
    payment.examination_schedule_id = current_examination_schedule.id
    payment.created_by = current_user.id
    payment.price_id = price.id
    
    
    if payment.save
      #create examinees record
      examinee = Examinee.new
      examinee.student_id = app.student_id
      examinee.examination_type = app.examination_type
      examinee.examination_schedule_id = current_examination_schedule.id
      examinee.created_by = current_user.id
      examinee.save
    
      render :update do |page|
        page.replace_html "payment_div#{app.id}", :text => params[:or_number]
        page.visual_effect :highlight, "payment_div#{app.id}", :duration => 1
      end
    else
      flash[:error] = "An error occured during the update"
      redirect_to cashiers__path and return
    end
  end
  
  def new
    if request.post?
      role = Role.find(:first, :conditions => "role_code='cashier'")
      @cashier = User.new(params[:user])
      @cashier.role_id = role.id
      @cashier.save
      redirect_to cashiers_path
    end
    
  end
  
  def show
  end
  
  private
  
  def load_prc_locations
    @prc_locations = []
    prc_locations = PrcLocation.find(:all)
    province_ids = prc_locations.map(&:province_id)
    province = Province.find(:all, :conditions => ["id in (?)", province_ids])
    province.each do |p|
      @prc_locations << [ p.name, p.id]
    end
    @prc_locations
  end

end