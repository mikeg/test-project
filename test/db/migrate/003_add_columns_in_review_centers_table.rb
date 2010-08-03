class AddColumnsInReviewCentersTable < ActiveRecord::Migration
  def self.up
    add_column :review_centers, :address, :string rescue nil
  end
  
  def self.down
  end
end