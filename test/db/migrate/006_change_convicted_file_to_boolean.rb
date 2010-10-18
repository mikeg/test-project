class ChangeConvictedFileToBoolean < ActiveRecord::Migration
  def self.up
    change_column :students, :convicted_file, :boolean
  end
  
  def self.down
  end
end