class CreateActionLogsTable < ActiveRecord::Migration
  def self.up
    create_table :action_logs, :force => true do |t|
      t.column "controller", :string, :null => true
      t.column "action", :string, :null => true
      t.column "params", :string, :null => true
      t.column "user_id", :integer, :null => true
      t.column "user_fullname", :string, :null => true
      t.column "created_at", :datetime
    end
  end

  def self.down
    drop_table :action_logs
  end
end
