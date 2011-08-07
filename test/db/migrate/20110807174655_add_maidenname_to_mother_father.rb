class AddMaidennameToMotherFather < ActiveRecord::Migration
  def self.up
    add_column :students, :fathers_firstname, :string, :null => true
    add_column :students, :fathers_maiden, :string, :null => true
    add_column :students, :fathers_lastname, :string, :null => true
    add_column :students, :mothers_firstname, :string, :null => true
    add_column :students, :mothers_maiden, :string, :null => true
    add_column :students, :mothers_lastname, :string, :null => true
  end

  def self.down
  end
end
