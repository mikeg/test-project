class ChangeConvictedToBoolean < ActiveRecord::Migration
  def self.up
    change_column :students, :convicted, :boolean
  end
  
  def self.down
  end
end