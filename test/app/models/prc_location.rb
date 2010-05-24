class PrcLocation < ActiveRecord::Base
  
  validates_uniqueness_of :region, :message => "Name has already been taken."
  validates_uniqueness_of :code, :message => "Code has already been taken."
end