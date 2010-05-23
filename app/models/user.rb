class User < ActiveRecord::Base
  belongs_to :role
  belongs_to :school
  
  validates_uniqueness_of :username
  
  def fullname
    "#{self.firstname} #{self.lastname}"
  end
  
  def status_name
    (self.is_active) ? "active" : "inactive"
  end
  
end