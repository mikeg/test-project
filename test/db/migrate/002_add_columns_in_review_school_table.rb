class AddColumnsInReviewSchoolTable < ActiveRecord::Migration
  def self.up
    add_column :review_schools, :code, :string rescue nil
    add_column :review_schools, :address, :string rescue nil
  end
  
  def self.down
  end
end