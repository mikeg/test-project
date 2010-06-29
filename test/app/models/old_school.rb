class OldSchool < ActiveRecord::Base
  set_table_name "old_schools"
  set_primary_key "School_ID"
#  belongs_to :address, :dependent => :destroy
#  has_many :students
#  belongs_to :region
#  belongs_to :province
#  belongs_to :town

end