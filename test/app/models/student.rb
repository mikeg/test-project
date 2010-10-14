class Student < ActiveRecord::Base
  belongs_to :school
  belongs_to :region
  belongs_to :province
  belongs_to :town
  belongs_to :country
#  belongs_to :examinee

  
  def self.with_foster(school, page)
    #TODO: get students with foster
    Student.paginate(
               :per_page => 20,
               :page => page,
               :conditions => ['foster_id IS NOT NULL AND school_id = ? ', school.id],
               :order => "lastname asc")
  end

  def self.find_repeater(search, page, school=nil)

    students = unless school.nil?
    Student.paginate(
               :per_page => 20,
               :page => page,
               :conditions => ['foster_id IS NULL AND school_id = ? and ( firstname like ? or lastname like ? or middlename like ?)', school.id, "%#{search}%", "%#{search}%", "%#{search}%"],
               :order => "lastname")
    else
    Student.paginate(
               :per_page => 20,
               :page => page,
               :conditions => ['foster_id IS NULL AND firstname like ? or lastname like ? or middlename like ?', "%#{search}%", "%#{search}%", "%#{search}%"],
               :order => "lastname")
    end
  end

  def self.search(search, page, school=nil)
    unless school.nil?
      paginate :per_page => 20,
               :page => page,
               :conditions => ['foster_id IS NULL AND school_id = ? and ( firstname like ? or lastname like ? or middlename like ?)', school.id, "%#{search}%", "%#{search}%", "%#{search}%"],
               :order => "lastname"
    else
      paginate :per_page => 20,
               :page => page,
               :conditions => ['foster_id IS NULL AND firstname like ? or lastname like ? or middlename like ?', "%#{search}%", "%#{search}%", "%#{search}%"],
               :order => "lastname"
    end
  end

  def self.foster_search(search, page, foster)
    paginate :per_page => 20,
             :page => page,
             :conditions => [' foster_id IS NOT NULL AND  ( firstname like ? or lastname like ? or middlename like ?)', "%#{search}%", "%#{search}%", "%#{search}%"],
             :order => "lastname"
  end


  def self.search_tobe_released(search, page, school)
       paginate :per_page => 20,
                :page => page,
                :conditions => ['school_id = ? and (firstname like ? or lastname like ? or middlename like ?)', school.id, "%#{search}%", "%#{search}%", "%#{search}%"],
                :order => "lastname"
   end


  def self.search_tobe_accepted(search, page, school)
       paginate :per_page => 20,
                :page => page,
                :conditions => ['school_id <> ? and (firstname like ? or lastname like ? or middlename like ?)', school.id, "%#{search}%", "%#{search}%", "%#{search}%"],
                :order => "lastname"
   end

  def self.check_duplicate(school, param)
    firstname = param[:firstname].downcase
    lastname  = param[:lastname].downcase
    dob       = param[:dob]
    find(:all, :conditions => ["LCASE(firstname) like ? and LCASE(lastname) like ? and date_of_birth = ?",  firstname, lastname, dob] )
  end

  def repeater?
    ex = Examinee.find(:first, :conditions => ["student_id = ?", self.id], :order => "examination_schedule_id DESC" ) rescue nil
    return false if  ex.nil?
      
    cur_schedule = ExaminationSchedule.find(:first, :order => "id DESC")
    unless ex.nil? and cur_schedule.nil?
      if ex.examination_schedule_id == cur_schedule.id
        false
      elsif (ex.exam1.to_i + ex.exam2.to_i + ex.exam3.to_i + ex.exam4.to_i + ex.exam5.to_i) == 0
        true
      elsif (ex.exam1.to_i + ex.exam2.to_i + ex.exam3.to_i + ex.exam4.to_i + ex.exam5.to_i) == 5
        false
      else
        false
      end
    end
  end
  
  def fullname
    "#{self.firstname} #{self.middlename} #{self.lastname}".titleize
  end
  
  def year_level
    level = case self.year.to_s
    when "first1"
      "1st year"
    when "first2"
      "1st year irregular"
    when "second1"
      "2nd year"
    when "second2"
      "2nd year irregular"
    when "third1"
      "3rd year"
    when "third2"
      "3rd year irregular"
    when "fourth1"
      "4th year"
    when "fourth2"
      "4th year irregular"
    else
      "Graduate"
    end
    level
  end
  
  def foreign?
    ph = Country.find_by_code("PH")
    !(self.country_id.to_i == ph.id.to_i)
  end
end