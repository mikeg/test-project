class Examinee < ActiveRecord::Base
  belongs_to :student
  belongs_to :test_center
  belongs_to :examination_schedule
  belongs_to :prc_location

  class << self
    def list_examinees(user)
      location = PrcLocation.find_by_code(user.location)
      find(:all, :conditions => ["prc_location_id = ?", location.id])
    end
  end
  
  def self.search_noa_students(search, page)
    students = Student.find(:all, :conditions => [' (firstname like ? or lastname like ? or middlename like ?)',  "%#{search}%", "%#{search}%", "%#{search}%"])
    student_ids = students.map(&:id)
    paginate :per_page => 20,
             :page => page,
             :conditions => ['perrc IS NULL and student_id in (?)', student_ids]
  end
  
  def repeater?
    total = self.exam1 + self.exam2 + self.exam3 + self.exam4 + self.exam5

    if total == 0
      true
    else
      false
    end
  end

  def conditioned?
    total = self.exam1 + self.exam2 + self.exam3 + self.exam4 + self.exam5

    if total == 4
      true
    else
      false
    end
  end
  

end