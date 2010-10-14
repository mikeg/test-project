class StudentsController < ApplicationController
  layout 'application'
  protect_from_forgery
  before_filter :require_user

  before_filter :load_schools_select, :only => [:update_degree]
  before_filter :load_courses_select, :only => [:update_degree]

  
  def index
    if current_user.role_code == "registrar"
      @students = Student.search(params[:search], params[:page], current_user.school)
    else
      @students = Student.search(params[:search], params[:page])
    end
  end

  def with_foster
    #TODO
    @foster_students = Student.with_foster(current_user.school, params[:page])
  end
  
  def newapplication
    @student = Student.find(params[:id])
    preload_form_data

    @add_provinces = []
    @add_towns = []
    provinces = Province.find(:all, :conditions => ["region_id = ?", @student.region_id])
    provinces.each do |p|
      @add_provinces << [p.name, p.id]
    end
    towns = Town.find(:all, :conditions => ["province_id = ?", @student.province_id])
    towns.each do |t|
      @add_towns << [t.name, t.id]
    end


    @pob_provinces = []
    @pob_towns = []
    provinces = Province.find(:all, :conditions => ["region_id = ?", @student.pob_region_id])
    provinces.each do |p|
      @pob_provinces << [p.name, p.id]
    end
    towns = Town.find(:all, :conditions => ["province_id = ?", @student.pob_province_id])
    towns.each do |t|
      @pob_towns << [t.name, t.id]
    end

    app = Applicant.find(:first, :conditions => ["student_id = ? and examination_schedule_id = ?", @student.id, current_examination_schedule.id]) rescue nil
    puts app.inspect

    if app
      puts "pass"
      flash[:error] = "Has existing application filed already."
      redirect_to students_path
    end
  end
  
  def view
    preload_form_data
    @student = Student.find(params[:id])
    @exams = Examinee.find(:all, :conditions => ["student_id = ?", @student.id])
  end
  
  def new
    @student = Student.new
    preload_form_data
    
    if request.post?
      student = Student.new(params[:student])
      student.created_by = current_user
      student.region_id = params[:address_region_id]
      student.province_id = params[:address_province_id]
      student.town_id = params[:address_town_id]
      student.date_of_birth = "#{params[:dob_year]}-#{params[:dob_month]}-#{params[:dob_day]}".to_date
      student.pob_region_id = params[:pob_region_id]
      student.pob_province_id = params[:pob_province_id]
      student.pob_town_id = params[:pob_town_id]
      student.school_id = current_user.school_id
      student.review_center1 = params[:review_center1]
      student.review_center2 = params[:review_center2]
      student.review_center3 = params[:review_center3]
      student.review_school1 = params[:review_school1]
      student.review_school2 = params[:review_school2]
      student.review_school3 = params[:review_school3]
      
      # 032:2554645
      student.telephone = "#{params[:telno_code]}:#{params[:telno_number]}"
      # 0919:5657898
      student.mobile_no = "#{params[:mobile_network]}:#{params[:mobile_number]}"
      

      duplicates = Student.check_duplicate(current_user.school, { :firstname => student.firstname, :lastname => student.lastname, :dob => student.date_of_birth.to_date.to_s})
      if duplicates.length > 0
        flash[:error] = "Student already exists!"
        redirect_to students_path and return
      end

      student.save

      if params[:degree] == "0"
        params[:other_courses].each do |deg|
          if !deg[1].blank? && !params[:other_schools][deg[0]][1].blank?
            ed_info = EducationalInformation.new
            ed_info.student_id = student.id
            ed_info.course_id = deg[1].to_i
            ed_info.school_id = params[:other_schools][deg[0]][1].to_i
            ed_info.graduated_at = "#{params[:other_years][deg[0]][1]}-#{params[:other_months][deg[0]][1]}-#{params[:other_days][deg[0]][1]}"
            ed_info.created_by = current_user.id
            ed_info.save
          end
        end
      end
      student.save

      app  = Applicant.new()
      app.student_id = student.id
      app.school_id = current_user.school_id
      app.created_by = current_user
      app.examination_type = params[:exam_type]
      app.examination_schedule_id = current_examination_schedule.id
      app.save
      

      unless params[:courses1].blank?
        ed_info = EducationalInformation.new
        ed_info.student_id = student.id
        ed_info.course_id = params[:courses1]
        ed_info.school_id = params[:schools1]
        ed_info.graduated_at = "#{params[:dob_months1]}-#{params[:dob_days1]}-#{params[:dob_years1]}"
        ed_info.created_by = current_user
        ed_info.save
      end
      unless params[:courses2].blank?
        ed_info = EducationalInformation.new
        ed_info.student_id = student.id
        ed_info.course_id = params[:courses2]
        ed_info.school_id = params[:schools2]
        ed_info.graduated_at = "#{params[:dob_months2]}-#{params[:dob_days2]}-#{params[:dob_years2]}"
        ed_info.created_by = current_user
        ed_info.save
      end
      unless params[:courses3].blank?
        ed_info = EducationalInformation.new
        ed_info.student_id = student.id
        ed_info.course_id = params[:courses3]
        ed_info.school_id = params[:schools3]
        ed_info.graduated_at = "#{params[:dob_months3]}-#{params[:dob_days3]}-#{params[:dob_years3]}"
        ed_info.created_by = current_user
        ed_info.save
      end

      
      flash[:notice] = "Student added successfully"
      redirect_to students_path
    else
        
    end

  end


  def new_application
    student = Student.find(params[:id])


      student.region_id = params[:address_region_id]
      student.province_id = params[:address_province_id]
      student.town_id = params[:address_town_id]
      student.date_of_birth = "#{params[:dob_year]}-#{params[:dob_month]}-#{params[:dob_day]}".to_date
      student.pob_region_id = params[:pob_region_id]
      student.pob_province_id = params[:pob_province_id]
      student.pob_town_id = params[:pob_town_id]
      student.school_id = current_user.school_id
      student.review_center1 = params[:review_center1]
      student.review_center2 = params[:review_center2]
      student.review_center3 = params[:review_center3]
      student.review_school1 = params[:review_school1]
      student.review_school2 = params[:review_school2]
      student.review_school3 = params[:review_school3]

      duplicates = Student.check_duplicate(current_user.school, { :firstname => student.firstname, :lastname => student.lastname, :dob => student.date_of_birth.to_date.to_s})
      if duplicates.length > 0
        flash[:error] = "Student already exists!"
        redirect_to students_path and return
      end

      student.save

      if params[:degree] == "0"
        params[:other_courses].each do |deg|
          if !deg[1].blank? && !params[:other_schools][deg[0]][1].blank?
            ed_info = EducationalInformation.new
            ed_info.student_id = student.id
            ed_info.course_id = deg[1].to_i
            ed_info.school_id = params[:other_schools][deg[0]][1].to_i
            ed_info.graduated_at = "#{params[:other_years][deg[0]][1]}-#{params[:other_months][deg[0]][1]}-#{params[:other_days][deg[0]][1]}"
            ed_info.created_by = current_user.id
            ed_info.save
          end
        end
      end
      student.save

      app  = Applicant.new()
      app.student_id = student.id
      app.school_id = current_user.school_id
      app.created_by = current_user
      app.examination_type = params[:exam_type]
      app.examination_schedule_id = current_examination_schedule.id
      
      app.is_approved = true
      app.has_nso = true
      app.has_marriage = true if student.marital_status.to_s == "married"
      app.has_tor = true
      app.has_rle = true
      app.has_order = true
      app.is_foreign = true if student.country_id != filipino.id
      app.has_passport = true
      app.has_envelope = true
      app.has_stamp = true
      app.has_cedula = true

      app.save

      unless params[:courses1].blank?
        ed_info = EducationalInformation.new
        ed_info.student_id = student.id
        ed_info.course_id = params[:courses1]
        ed_info.school_id = params[:schools1]
        ed_info.graduated_at = "#{params[:dob_months1]}-#{params[:dob_days1]}-#{params[:dob_years1]}"
        ed_info.created_by = current_user
        ed_info.save
      end
      unless params[:courses2].blank?
        ed_info = EducationalInformation.new
        ed_info.student_id = student.id
        ed_info.course_id = params[:courses2]
        ed_info.school_id = params[:schools2]
        ed_info.graduated_at = "#{params[:dob_months2]}-#{params[:dob_days2]}-#{params[:dob_years2]}"
        ed_info.created_by = current_user
        ed_info.save
      end
      unless params[:courses3].blank?
        ed_info = EducationalInformation.new
        ed_info.student_id = student.id
        ed_info.course_id = params[:courses3]
        ed_info.school_id = params[:schools3]
        ed_info.graduated_at = "#{params[:dob_months3]}-#{params[:dob_days3]}-#{params[:dob_years3]}"
        ed_info.created_by = current_user
        ed_info.save
      end


      flash[:notice] = "Application created successfully"
      redirect_to status_reports_path

  end
  
  def show
  end

  def check_duplicate_student
    @students = Student.check_duplicate(current_user.school, params)
  end
  
  def update_province_select_address
    @region, @provinces, @towns = [], [], []
    @region = Region.find(params[:region_id])
    @region.provinces.find(:all, :order => "name asc").each do |p|
      @provinces << [p.name.titleize, p.id]
    end

    @region.provinces.first.towns.each do |t|
      @towns << [t.name, t.id]
    end unless @region.provinces.empty?

    render :update do |page|
      page.replace_html("address_province_div", :partial => 'students/province_select', :locals => { :provinces => @provinces, :selected_id => nil})
      page.visual_effect :highlight, "address_province_div", :duration => 1
      page.replace_html("address_town_div", :partial => 'students/town_select', :locals => { :towns => @towns, :selected_id => nil })
      page.visual_effect :highlight, "address_town_div", :duration => 1
    end
  end

  def update_town_select_address
    @towns = []
    @province = Province.find(params[:province_id])
    @province.towns.find(:all, :order => "name asc").each do |t|
      @towns << [t.name.titleize, t.id]
    end
    render :update do |page|
      page.replace_html("address_town_div", :partial => 'students/town_select', :locals => { :towns => @towns, :selected_id => nil })
      page.visual_effect :highlight, "address_town_div", :duration => 1
    end
  end

  def update_province_select_pob
    @region, @pob_provinces, @pob_towns = [], [], []
    @region = Region.find(params[:region_id])
    @region.provinces.find(:all, :order => "name asc").each do |p|
      @pob_provinces << [p.name.titleize, p.id]
    end

    @region.provinces.first.towns.find(:all, :order => "name asc").each do |t|
      @pob_towns << [t.name.titleize, t.id]
    end

    render :update do |page|
      page.replace_html("pob_province_div", :partial => 'students/pob_province_select', :locals => { :provinces => @pob_provinces, :selected_id => nil})
      page.visual_effect :highlight, "pob_province_div", :duration => 1
      page.replace_html("pob_town_div", :partial => 'students/pob_town_select', :locals => { :towns => @pob_towns, :selected_id => nil})
      page.visual_effect :highlight, "pob_town_div", :duration => 1
    end
  end

  def update_town_select_pob
    @pob_towns = []
    @province = Province.find(params[:province_id])
    @province.towns.find(:all, :order => "name asc").each do |t|
      @pob_towns << [t.name.titleize, t.id]
    end
    render :update do |page|
      page.replace_html("pob_town_div", :partial => 'students/pob_town_select', :locals => { :towns => @pob_towns, :selected_id => nil})
      page.visual_effect :highlight, "pob_town_div", :duration => 1
    end
  end

  def update_province_select_school
    @region, @provinces, @towns = [], [], []
    @region = Region.find(params[:region_id])
    @region.provinces.find(:all, :order => "name asc").each do |p|
      @provinces << [p.name.titleize, p.id]
    end

    @region.provinces.first.towns.find(:all, :order => "name asc").each do |t|
      @towns << [t.name.titleize, t.id]
    end

    render :update do |page|
      page.replace_html("school_province_div", :partial => 'students/school_province_select')
      page.visual_effect :highlight, "school_province_div", :duration => 1
      page.replace_html("school_town_div", :partial => 'students/school_town_select')
      page.visual_effect :highlight, "school_town_div", :duration => 1
    end
  end

  def update_town_select_school
    @towns = []
    @province = Province.find(params[:province_id])
    @province.towns.find(:all, :order => "name asc").each do |t|
      @towns << [t.name.titleize, t.id]
    end
    render :update do |page|
      page.replace_html("school_town_div", :partial => 'students/school_town_select')
      page.visual_effect :highlight, "school_town_div", :duration => 1
    end
  end

  def update_school_select
    show = nil
    if ["repeater", "conditioned"].include?(params[:exam_type].to_s)
      show = true
    end
    render :update do |page|
      page.replace_html("nle_taken_div", :partial => 'students/nle_taken', :locals => {:student => student})
      page.visual_effect :highlight, "nle_taken_div", :duration => 1
    end
  end
  
  def update_degree
    if params[:degree] == "0"
      render :update do |page|
        page.replace_html("degree_div", :partial => 'students/degree_div', :locals => {:degree => 0})
        page.visual_effect :highlight, "degree_div", :duration => 1
      end
    else
      render :update do |page|
        page.replace_html("degree_div", :partial => 'students/degree_div', :locals => {:degree => 1})
      end
    end
  end
  

  def repeater
    @students = []
    if params[:search]
      if current_user.role_code == "registrar"
        @students = Student.find_repeater(params[:search], params[:page],  current_user.school)
      else
        @students = Student.find_repeater(params[:search], params[:page])
      end
    end
  end
  
  
  private

  def preload_form_data
    @regions, @provinces, @towns, @countries, @civilstatus, @courses = [], [], [], [], [], []
    
    regions = Region.find(:all, :order => "name asc")
    regions.each do |r|
      @regions << [r.name.titleize, r.id]
    end
    
    unless regions.first.provinces.empty?
      regions.first.provinces.find(:all, :order => "name asc").each do |p|
        @provinces << [p.name.titleize, p.id]
      end
      unless regions.first.provinces.first.towns.empty?
        regions.first.provinces.first.towns.find(:all, :order => "name asc").each do |t|
          @towns << [t.name.titleize, t.id]
        end unless regions.first.provinces
      end
    end


  
    countries = Country.find(:all, :order => "name ASC")
    countries.each do |c|
      @countries << [c.name, c.id]
    end
    
    civilstatus = CivilStatus.find(:all, :order => "name ASC")
    civilstatus.each do |c|
      @civilstatus << [c.name, c.code]
    end
    
    courses = Course.find(:all)
    courses.each do |c|
      @courses << [c.name, c.id]
    end
    
    @nursing_course = Course.find_by_abbrev("BSN")
    @default_country = Country.find_by_code("PH")
    
    @review_schools = []
    review_schools = ReviewSchool.find(:all)
    review_schools.each do |r|
      @review_schools << [r.name, r.id]
    end

    @review_centers = []
    review_centers = ReviewCenter.find(:all)
    review_centers.each do |r|
      @review_centers << [r.name, r.id]
    end

  end
  
  def load_schools_select
    @schools = [['Select','']]
    schools = School.find(:all, :order => ["name asc"])
    schools.each do |s|
      @schools << [s.name, s.id]
    end
  end
  def load_courses_select
    @courses = [['Select','']]
    courses = Course.find(:all, :order => ["name asc"])
    courses.each do |c|
      @courses << [c.name, c.id]
    end
  end
  
  
end