module Authentication

  def require_user
    if logged_in?
      true
    else
      flash[:error] = 'Invalid login'
      redirect_to sessions_path
    end
  end
  
  def logged_in?
    current_user != :false
  end
  
  def current_user
    @current_user ||= (session[:user] && User.find(session[:user])) || :false
  end

  def current_examination_schedule
    @current_examination_schedule ||= ExaminationSchedule.find(:last)
  end

  def prev_examination_schedule
    exams = ExaminationSchedule.find(:all, :order => "id DESC", :limit => 2)
    if exams.length == 2
      @prev_examination_schedule = exams[1]
    else
      @prev_examination_schedule ||= ExaminationSchedule.find(:last)
    end
  end
  
  def filipino
    @filipino = Country.find_by_code("PH")
  end

end