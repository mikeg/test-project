class ReviewSchool < ActiveRecord::Base

  def self.find_paginated(page)
    self.paginate(
               :per_page => 20,
               :page => page,
               :order => "name")
    
  end
end