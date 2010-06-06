class InitialSchema < ActiveRecord::Migration
  
  def self.up
    create_table "users", :force => true do |t|
      t.column "username", :string
      t.column "password", :string
      t.column "role_code",  :string
      t.column "school_id", :integer, :default => 0
      t.column "employee_no", :string
      t.column "firstname", :string
      t.column "lastname", :string
      t.column "location", :string
      t.column "is_active", :boolean, :default => false
      t.column "created_at", :datetime
      t.column "created_by", :integer
      t.column "updated_at", :datetime
      t.column "updated_by", :integer
    end
    add_index "users", ["username", "password"], :name => "username_password"
    
    create_table "roles", :force => true do |t|
      t.column "role_code", :string
      t.column "role_description", :string
    end
    add_index "roles", ["role_code"], :name => "role_code"
    
    create_table "schools", :force => true do |t|
      t.column "name", :string
      t.column "street_brgy", :string
      t.column "address_id", :integer, :default => 0, :null => false
      t.column "region_id", :integer
      t.column "province_id", :integer
      t.column "town_id", :integer
      t.column "street", :string
      t.column "zip_code", :string
      t.column "area_code", :string
      t.column "rurban_code", :string
      t.column "prc_school_code", :string, :null => false
      t.column 'is_active', :boolean, :default => false
      t.column "chedreg_boardres", :string
      t.column "has_ched", :boolean, :default => false
      t.column "created_at", :datetime, :null => false
      t.column "created_by", :integer, :default => 0
      t.column "updated_at", :datetime
      t.column "updated_by", :integer, :default => 0
    end

    create_table "school_users", :force => true do |t|
      t.column "school_id", :integer
      t.column "user_id", :integer
    end
    
    create_table "regions", :force => true do |t|
      t.column "name", :string
    end
    
    create_table "provinces", :force => true do |t|
      t.column "name", :string
      t.column "region_id", :integer, :default => 0, :null => false
      t.column "area_code", :integer, :null => true
    end
    
    create_table "towns", :force => true do |t|
      t.column "name", :string
      t.column "province_id", :integer, :default => 0, :null => false
      t.column "zip_code", :integer, :null => true
    end
    
    create_table "addresses", :force => true do |t|
      t.column "region_id", :integer
      t.column "province_id", :integer
      t.column "town_id", :integer
      t.column "city_town", :string
      t.column "zip_code", :string
      t.column "rurban_code", :string
      t.column "area_code", :string
      t.column "region", :string
      t.column "province", :string
    end
    
    create_table "applications", :force => true do |t|
      t.column "application_number", :integer, :default => 0, :null => false
      t.column "examination_schedule_id", :integer, :null => false
      t.column "is_approved", :boolean, :default => false, :null => true
      t.column "is_repeater", :boolean, :default => false, :null => true
      t.column "has_nso", :boolean, :default => false, :null => true
      t.column "has_marriage", :boolean, :default => false, :null => true
      t.column "has_tor", :boolean, :default => false, :null => true
      t.column "has_rle", :boolean, :default => false, :null => true
      t.column "has_order", :boolean, :default => false, :null => true
      t.column "or_number", :string, :null => true
      t.column "or_date", :date, :null => true
      t.column "student_id", :integer, :default => 0, :null => false
      t.column "school_id", :integer, :default => 0, :null => false
      t.column "test_center_id", :integer, :default => 0
      t.column "is_foreign", :boolean, :default => false, :null => false
      t.column "is_completed", :boolean, :default => false, :null => false
      t.column "has_passport", :boolean, :default => false, :null => false
      t.column "has_envelope", :boolean, :default => false, :null => false
      t.column "has_stamp", :boolean, :default => false, :null => false
      t.column "has_cedula", :boolean, :default => false, :null => false
      t.column "special_order", :string, :null => true
      t.column "examination_type", :string, :null => false, :default => "new"
      t.column "status", :boolean, :default => false
      t.column "created_at", :datetime
      t.column "created_by", :integer, :default => 0, :null => false
      t.column "updated_at", :datetime
      t.column "udpate_by", :integer, :default => 0
    end
    add_index "applications", ["application_number"], :name => "application_number"
    
    create_table "citizenships", :force => true do |t|
      t.column "country", :string, :null => false
      t.column "code", :string, :null => false
    end
    add_index "citizenships", ["code"], :name => "code"
    
    create_table "courses", :force => true do |t|
      t.column "code", :string, :null => false
      t.column "name", :string
      t.column "abbrev", :string
    end
    add_index "courses", ["code"], :name => "code"
    
    create_table "educational_informations", :force => true do |t|
      t.column "student_id", :integer
      t.column "school_id", :integer
      t.column "course_id", :integer
      t.column "graduated_at", :date
      t.column "created_at", :datetime
      t.column "created_by", :integer
      t.column "updated_at", :datetime
      t.column "updated_by", :integer
    end
    add_index "educational_informations", ["student_id"], :name => "student_id"
    add_index "educational_informations", ["school_id"], :name => "school_id"
    
    create_table "exam_histories", :force=> true do |t|
      t.column "exam_at", :date
      t.column "grade", :decimal, :precision => 10, :scale => 2, :default => 0.0
      t.column "has_passed", :boolean, :default => false
      t.column "application_id", :integer
      t.column "student_id", :integer
      t.column "school_id", :integer
      t.column "test_center_id", :integer
      t.column "created_at", :datetime
      t.column "created_by", :integer, :default => 0
    end
    
    create_table "exam_results", :force => true do |t|
      t.column "exam_at", :date
      t.column "grade", :decimal, :precision => 10, :scale => 2, :default => 0.0
      t.column "has_passed", :boolean, :default => false
      t.column "application_id", :integer
      t.column "student_id", :integer
      t.column "school_id", :integer
      t.column "test_center_id", :integer
      t.column "created_at", :datetime
      t.column "created_by", :integer, :default => 0
    end
    
    create_table "order_cases", :force => true do |t|
      t.column "student_id", :integer
      t.column "school_id", :integer
      t.column "case_number", :integer
      t.column "date_submitted", :date
      t.column "created_at", :datetime
      t.column "created_by", :integer
      t.column "updated_at", :datetime
      t.column "updated_by", :integer
    end
    
    create_table "prc_locations", :force => true do |t|
      t.column "region", :string
      t.column "code", :string
      t.column "is_satellite", :boolean, :default => true
      t.column "created_at", :datetime
      t.column "created_by", :integer
      t.column "updated_at", :datetime
      t.column "updated_by", :integer
    end
    
    create_table "rurbans", :force => true do |t|
      t.column "address_id", :integer
      t.column "description", :string
      t.column "code", :integer
    end
    
    create_table "school_histories", :force => true do |t|
      t.column "student_id", :integer
      t.column "school_id", :integer
      t.column "date_graduated", :date
    end
    
    create_table "test_centers", :force => true do |t|
      t.column "name", :string
      t.column "code", :string
      t.column "region_id", :integer
      t.column "province_id", :integer
      t.column "town_id", :integer
      t.column "street_brgy", :string
      t.column "created_at", :datetime
      t.column "created_by", :integer
      t.column "updated_at", :datetime
      t.column "updated_by", :integer
      t.column "is_active", :boolean, :default => false
    end
   
    create_table "students", :force => true do |t|
      t.column "firstname", :string
      t.column "lastname", :string
      t.column "middlename", :string
      t.column "year", :string
      t.column "sex", :string
      t.column "street_brgy", :string
      t.column "region_id", :integer
      t.column "province_id", :integer
      t.column "town_id", :integer
      t.column "street", :string
      t.column "zip_code", :integer
      t.column "area_code", :integer
      t.column "country_id", :string
      t.column "email", :string
      t.column "telephone", :string 
      t.column "mobile_no", :string
      t.column "marital_status", :string
      t.column "date_of_birth", :date
      t.column "date_of_birth_place", :string
      t.column "pob_region_id", :integer
      t.column "pob_province_id", :integer
      t.column "pob_town_id", :integer
      t.column "pob_street", :string
      t.column "pob_zip_code", :string
      t.column "pob_area_code", :string
      t.column "pob_rurban_code", :string
      t.column "spouse", :string
      t.column "spouse_citizenship_id", :string
      t.column "father", :string
      t.column "father_citizenship_id", :string
      t.column "mother", :string
      t.column "mother_citizenship_id", :string
      t.column "convicted", :string
      t.column "convicted_file", :string
      t.column "school_id", :integer
      t.column "course_id", :integer
      t.column "review_school1", :string
      t.column "review_school2", :string
      t.column "review_school3", :string
      t.column "review_center1", :string
      t.column "review_center2", :string
      t.column "review_center3", :string
      t.column "foster_id", :integer
      t.column "released_at", :date
      t.column "created_by", :integer
      t.column "created_at", :datetime
      t.column "updated_by", :datetime
      t.column "updated_at", :datetime
    end
    
    create_table "educations", :force => true do |t|
      t.column "school_id", :integer
      t.column "course_id", :integer
      t.column "review_school", :string
      t.column "review_center", :string
    end

    create_table "examinees", :force=> true do |t|
      t.column "student_id", :integer
      t.column "student_id", :integer      
      t.column "examination_type", :string
      t.column "test_center_id", :integer
      t.column "examination_schedule_id", :integer
      t.column "rating", :string
      t.column "exam_status", :string
      t.column "exam_number", :string
      t.column "perrc", :string, :null => true
      t.column "exam1", :integer, :null => false, :default => -1
      t.column "exam2", :integer, :null => false, :default => -1
      t.column "exam3", :integer, :null => false, :default => -1
      t.column "exam4", :integer, :null => false, :default => -1
      t.column "exam5", :integer, :null => false, :default => -1
      t.column "created_at", :datetime
      t.column "created_by", :integer, :default => 0
      t.column "updated_at", :datetime
      t.column "updated_by", :integer, :default => 0
    end

    create_table "examination_schedules", :force=> true do |t|
      t.column "course_id", :string
      t.column "schedule", :date
      t.column "created_at", :datetime
      t.column "created_by", :integer, :default => 0
      t.column "updated_at", :datetime
      t.column "updated_by", :integer, :default => 0
    end

    create_table "countries", :force => true do |t|
      t.column "name", :string
      t.column "code", :string
    end

    create_table "civil_statuses", :force => true do |t|
      t.column "name", :string
      t.column "code", :string
    end

    create_table "payments", :force => true do |t|
      t.column "student_id", :integer
      t.column "price_id", :integer
      t.column "or_number", :string
      t.column "examination_schedule_id", :integer
      t.column "application_id", :integer
      t.column "created_at", :datetime
      t.column "created_by", :integer
      t.column "updated_at", :datetime
      t.column "updated_by", :integer
    end
    
    create_table "review_schools", :force => true do |t|
      t.column "name", :string
    end

    create_table "review_centers", :force => true do |t|
      t.column "name", :string
    end

    create_table "prices", :force => true do |t|
      t.column "amount", :decimal
      t.column "examination_type", :string
    end
   
    create_table "transfer_histories", :force => true do |t|
      t.column "student_id", :integer
      t.column "school_id", :integer
      t.column "released_at", :date
      t.column "accepted_at", :date
      t.column "new_school_id", :integer
      t.column "created_by", :integer
      t.column "created_at", :datetime
    end
    
    create_table "feedbacks", :force => true do |t|
      t.column "subject", :string
      t.column "description", :text
      t.column "status", :boolean, :default => false
      t.column "created_by", :integer
      t.column "created_at", :datetime
    end
  end
  
  def self.down
  end
end