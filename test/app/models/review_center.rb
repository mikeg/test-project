class ReviewCenter < ActiveRecord::Base

  def self.find_paginated(page)
    self.paginate(
               :per_page => 16,
               :page => page,
               :order => "name")
    
  end
end