class AddColumnPrcLocationIdToExaminees < ActiveRecord::Migration
  def self.up
    add_column :examinees, :prc_location_id, :integer
  end

  def self.down
    remove_column :examinees, :prc_location_id
  end
end
