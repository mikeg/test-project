class Applicant < ActiveRecord::Base
  set_table_name "applications"
  belongs_to :student
  belongs_to :examination_schedule
  
  def self.search(search=nil, page=1, school=nil)
    fourth_or_graduate = ['fourth2', 'graduate']
    unless school.nil?
      students= Student.find(:all, :conditions => ['year IN (?) AND school_id = ? and (firstname like ? or lastname like ?)', fourth_or_graduate, school.id, "%#{search}%", "%#{search}%" ], :order => "lastname asc")      
    else
      students= Student.find(:all, :conditions => ['year IN (?) AND firstname like ? or lastname like ?', fourth_or_graduate, "%#{search}%", "%#{search}%" ], :order => "lastname asc")
    end
    
    student_ids = students.map(&:id)
    paginate :per_page => 20, 
             :page => page,
             :conditions => ["is_completed = 0 and student_id in (?)", student_ids]
  end
  
  def self.for_payment(search=nil, page = 1)
    students = Student.find(:all, :conditions => ['firstname like ? or lastname like ?', "%#{search}%", "%#{search}%"])
    student_ids = students.map(&:id)

    paginate :per_page => 20,
             :page => page,
             :conditions => ["is_completed = ? and student_id in (?) and special_order IS NOT NULL and status = 0", true, student_ids]

  end

end