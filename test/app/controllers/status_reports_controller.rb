class StatusReportsController < ApplicationController
  layout 'application'
  before_filter :require_user
  protect_from_forgery

  after_filter :completed_checker, :only => [:toogle_status_naf,
                                             :toogle_status_tor,
                                             :toogle_status_rle,
                                             :toogle_status_ordr,
                                             :toogle_status_nso,
                                             :toogle_status_marriage,
                                             :toogle_status_foreign,
                                             :toogle_status_passport,
                                             :toogle_status_envelope,
                                             :toogle_status_stamp,
                                             :toogle_status_cedula]

  def index
    @applicants = Applicant.search(params[:search], params[:page], current_user.school)
  end

  def show
  end

  def toogle_status_naf
    value = params[:val] == "true" ? 1 : nil
    @app = Applicant.find(params[:id])
    @app.is_approved = value

    ActionLog.newlog(controller_name, action_name, @app.changes, current_user)
    @app.save
    render :update do |page|
      page.replace_html "naf_span_#{@app.id}", render(:partial => 'status_naf', :locals => {:app => @app})
      page.visual_effect :highlight, "naf_span_#{@app.id}"
    end
  end

  def toogle_status_tor
    value = params[:val] == "true" ? 1 : nil
    @app = Applicant.find(params[:id])
    @app.has_tor = value

    ActionLog.newlog(controller_name, action_name, @app.changes, current_user)
    @app.save
    render :update do |page|
      page.replace_html "tor_span_#{@app.id}", render(:partial => 'status_tor', :locals => {:app => @app})
      page.visual_effect :highlight, "tor_span_#{@app.id}"
    end
  end
  
  def toogle_status_rle
    value = params[:val] == "true" ? 1 : nil
    @app = Applicant.find(params[:id])
    @app.has_rle = value

    ActionLog.newlog(controller_name, action_name, @app.changes, current_user)
    @app.save
    render :update do |page|
      page.replace_html "rle_span_#{@app.id}", render(:partial => 'status_rle', :locals => {:app => @app})
      page.visual_effect :highlight, "rle_span_#{@app.id}"
    end
  end  
  
  def toogle_status_ordr
    value = params[:val] == "true" ? 1 : nil
    @app = Applicant.find(params[:id])
    @app.has_order = value

    ActionLog.newlog(controller_name, action_name, @app.changes, current_user)
    @app.save
    render :update do |page|
      page.replace_html "ordr_span_#{@app.id}", render(:partial => 'status_ordr', :locals => {:app => @app})
      page.visual_effect :highlight, "ordr_span_#{@app.id}"
    end
  end  

  def toogle_status_nso
    value = params[:val] == "true" ? 1 : nil
    @app = Applicant.find(params[:id])
    @app.has_nso = value

    ActionLog.newlog(controller_name, action_name, @app.changes, current_user)
    @app.save
    
    render :update do |page|
      page.replace_html "nso_span_#{@app.id}", render(:partial => 'status_nso', :locals => {:app => @app})
      page.visual_effect :highlight, "nso_span_#{@app.id}"
    end
  end  

  def toogle_status_marriage
    value = params[:val] == "true" ? 1 : nil
    @app = Applicant.find(params[:id])
    @app.has_marriage = value

    ActionLog.newlog(controller_name, action_name, @app.changes, current_user)
    @app.save
    render :update do |page|
      page.replace_html "marriage_span_#{@app.id}", render(:partial => 'status_marriage', :locals => {:app => @app})
      page.visual_effect :highlight, "marriage_span_#{@app.id}"
    end
  end  

  def toogle_status_foreign
    value = params[:val] == "true" ? 1 : nil
    @app = Applicant.find(params[:id])
    @app.is_foreign = value

    ActionLog.newlog(controller_name, action_name, @app.changes, current_user)
    @app.save
    
    render :update do |page|
      page.replace_html "foreign_span_#{@app.id}", render(:partial => 'status_foreign', :locals => {:app => @app})
      page.visual_effect :highlight, "foreign_span_#{@app.id}"
    end
  end

  def toogle_status_passport
    value = params[:val] == "true" ? 1 : nil
    @app = Applicant.find(params[:id])
    @app.has_passport = value

    ActionLog.newlog(controller_name, action_name, @app.changes, current_user)
    @app.save
    render :update do |page|
      page.replace_html "passport_span_#{@app.id}", render(:partial => 'status_passport', :locals => {:app => @app})
      page.visual_effect :highlight, "passport_span_#{@app.id}"
    end
  end

  def toogle_status_envelope
    value = params[:val] == "true" ? 1 : nil
    @app = Applicant.find(params[:id])
    @app.has_envelope = value
    

    ActionLog.newlog(controller_name, action_name, @app.changes, current_user)
    @app.save
    render :update do |page|
      page.replace_html "envelope_span_#{@app.id}", render(:partial => 'status_envelope', :locals => {:app => @app})
      page.visual_effect :highlight, "envelope_span_#{@app.id}"
    end
  end

  def toogle_status_stamp
    value = params[:val] == "true" ? 1 : nil
    @app = Applicant.find(params[:id])
    @app.has_stamp = value

    ActionLog.newlog(controller_name, action_name, @app.changes, current_user)
    @app.save
    render :update do |page|
      page.replace_html "stamp_span_#{@app.id}", render(:partial => 'status_stamp', :locals => {:app => @app})
      page.visual_effect :highlight, "stamp_span_#{@app.id}"
    end
  end

  def toogle_status_cedula
    value = params[:val] == "true" ? 1 : nil
    @app = Applicant.find(params[:id])
    @app.has_cedula = value

    ActionLog.newlog(controller_name, action_name, @app.changes, current_user)
    @app.save
    
    render :update do |page|
      page.replace_html "cedula_span_#{@app.id}", render(:partial => 'status_cedula', :locals => {:app => @app})
      page.visual_effect :highlight, "cedula_span_#{@app.id}"
    end
  end

  def search
    students = Student.find(:all, :conditions => ["lastname LIKE ? or firstname like ? or middlename like ?", params[:search],params[:search],params[:search] ])
    student_ids = students.map(&:id)
    @applicants = Applicant.find(:all, :conditions => [" id IN (?)", student_ids])
    render :action => :index
  end

  def completed_checker
    if @app.student.foreign?
      if @app.student.marital_status.to_s == "married" 
        if @app.has_marriage? and @app.is_approved? && @app.has_nso? && @app.has_tor? && @app.has_rle? && @app.has_order? && @app.is_foreign? && @app.has_passport? && @app.has_envelope? && @app.has_stamp? && @app.has_cedula?
          Applicant.update(@app.id, {:is_completed => true})
        else
          Applicant.update(@app.id, {:is_completed => false})
        end
      else
        if @app.is_approved? && @app.has_nso? && @app.has_tor? && @app.has_rle? && @app.has_order? && @app.is_foreign? && @app.has_passport? && @app.has_envelope? && @app.has_stamp? && @app.has_cedula?
          Applicant.update(@app.id, {:is_completed => true})
        else
          Applicant.update(@app.id, {:is_completed => false})
        end
      end
    else
      if @app.student.marital_status.to_s == "married"
        if @app.has_marriage? and @app.is_approved? && @app.has_nso? && @app.has_marriage? && @app.has_tor? && @app.has_rle? && @app.has_order? && @app.has_passport? && @app.has_envelope? && @app.has_stamp? && @app.has_cedula?      
          Applicant.update(@app.id, {:is_completed => true})
        else
          Applicant.update(@app.id, {:is_completed => false})
        end
      else
        if @app.is_approved? && @app.has_nso? && @app.has_tor? && @app.has_rle? && @app.has_order? && @app.has_passport? && @app.has_envelope? && @app.has_stamp? && @app.has_cedula?
          Applicant.update(@app.id, {:is_completed => true})
        else
          Applicant.update(@app.id, {:is_completed => false})
        end
      end
    end
    
    if current_user.role_code.to_s == "registrar"
      if current_user.school.chedreg_boardres.blank? || current_user.school.chedreg_boardres.nil?
        Applicant.update(@app.id, {:is_completed => false})
      end
    end    
    
    ActionLog.newlog(controller_name, action_name, params, current_user)
  end

  
end
