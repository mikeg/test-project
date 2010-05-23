class School < ActiveRecord::Base
  belongs_to :address, :dependent => :destroy
  has_many :students
  belongs_to :region
  belongs_to :province
  belongs_to :town

  def self.search(search=nil, page=1)
    paginate :per_page => 20, 
             :page => page,
             :conditions => ['name like ?', "%#{search}%"],
             :order => "name"
  end
  
  def status_name
    (self.is_active) ? "active" : "inactive"
  end

  def complete_address
    address = ""
    address += self.street_brgy.to_s
    unless self.town_id.nil?
      address += self.town.name.to_s
    end
    address
  end
  
end