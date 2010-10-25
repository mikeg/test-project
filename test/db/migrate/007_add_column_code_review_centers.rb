class AddColumnCodeReviewCenters < ActiveRecord::Migration
  def self.up
    add_column :review_centers, :code, :string
  end
  
  def self.down
    drop_column :review_centers, :code
  end
end