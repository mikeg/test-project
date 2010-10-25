class AddTableFeedbacks < ActiveRecord::Migration
  def self.up
    create_table :feedbacks, :force => true do |t|
      t.column :name, :string
      t.column :subject, :string
      t.column :description, :text
      t.timestamps
    end
  end
  
  def self.down
    drop_table :feedbacks
  end
end