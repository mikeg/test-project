class PrcLocation < ActiveRecord::Base
  validates_uniqueness_of :region, :message => "Name has already been taken."
  validates_uniqueness_of :code, :message => "Code has already been taken."
  
  def self.find_paginated(page)
    self.paginate(
               :per_page => 20,
               :page => page,
               :order => "region")
    
  end
end