class AddColumnIsTestCenter < ActiveRecord::Migration
  def self.up
    add_column :prc_locations, :is_test_center, :boolean
  end

  def self.down
    remove_column :prc_locations, :is_test_center
  end
end
