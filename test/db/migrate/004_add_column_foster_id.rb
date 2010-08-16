class AddColumnFosterId < ActiveRecord::Migration
  def self.up
    add_column :applications, :foster_id, :integer
  end
  
  def self.down
  end
end