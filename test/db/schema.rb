# This file is auto-generated from the current state of the database. Instead of editing this file, 
# please use the migrations feature of Active Record to incrementally modify your database, and
# then regenerate this schema definition.
#
# Note that this schema.rb definition is the authoritative source for your database schema. If you need
# to create the application database on another system, you should be using db:schema:load, not running
# all the migrations from scratch. The latter is a flawed and unsustainable approach (the more migrations
# you'll amass, the slower it'll run and the greater likelihood for issues).
#
# It's strongly recommended to check this file into your version control system.

ActiveRecord::Schema.define(:version => 2) do

  create_table "addresses", :force => true do |t|
    t.integer "region_id"
    t.integer "province_id"
    t.integer "town_id"
    t.string  "city_town"
    t.string  "zip_code"
    t.string  "rurban_code"
    t.string  "area_code"
    t.string  "region"
    t.string  "province"
  end

  create_table "applications", :force => true do |t|
    t.integer  "application_number",      :default => 0,     :null => false
    t.integer  "examination_schedule_id",                    :null => false
    t.boolean  "is_approved",             :default => false
    t.boolean  "is_repeater",             :default => false
    t.boolean  "has_nso",                 :default => false
    t.boolean  "has_marriage",            :default => false
    t.boolean  "has_tor",                 :default => false
    t.boolean  "has_rle",                 :default => false
    t.boolean  "has_order",               :default => false
    t.string   "or_number"
    t.date     "or_date"
    t.integer  "student_id",              :default => 0,     :null => false
    t.integer  "school_id",               :default => 0,     :null => false
    t.integer  "test_center_id",          :default => 0
    t.boolean  "is_foreign",              :default => false, :null => false
    t.boolean  "is_completed",            :default => false, :null => false
    t.boolean  "has_passport",            :default => false, :null => false
    t.boolean  "has_envelope",            :default => false, :null => false
    t.boolean  "has_stamp",               :default => false, :null => false
    t.boolean  "has_cedula",              :default => false, :null => false
    t.string   "special_order"
    t.string   "examination_type",        :default => "new", :null => false
    t.boolean  "status",                  :default => false
    t.datetime "created_at"
    t.integer  "created_by",              :default => 0,     :null => false
    t.datetime "updated_at"
    t.integer  "udpate_by",               :default => 0
  end

  add_index "applications", ["application_number"], :name => "application_number"

  create_table "citizenships", :force => true do |t|
    t.string "country", :null => false
    t.string "code",    :null => false
  end

  add_index "citizenships", ["code"], :name => "code"

  create_table "civil_statuses", :force => true do |t|
    t.string "name"
    t.string "code"
  end

  create_table "countries", :force => true do |t|
    t.string "name"
    t.string "code"
  end

  create_table "courses", :force => true do |t|
    t.string "code",   :null => false
    t.string "name"
    t.string "abbrev"
  end

  add_index "courses", ["code"], :name => "code"

  create_table "educational_informations", :force => true do |t|
    t.integer  "student_id"
    t.integer  "school_id"
    t.integer  "course_id"
    t.date     "graduated_at"
    t.datetime "created_at"
    t.integer  "created_by"
    t.datetime "updated_at"
    t.integer  "updated_by"
  end

  add_index "educational_informations", ["school_id"], :name => "school_id"
  add_index "educational_informations", ["student_id"], :name => "student_id"

  create_table "educations", :force => true do |t|
    t.integer "school_id"
    t.integer "course_id"
    t.string  "review_school"
    t.string  "review_center"
  end

  create_table "exam_histories", :force => true do |t|
    t.date     "exam_at"
    t.decimal  "grade",          :precision => 10, :scale => 2, :default => 0.0
    t.boolean  "has_passed",                                    :default => false
    t.integer  "application_id"
    t.integer  "student_id"
    t.integer  "school_id"
    t.integer  "test_center_id"
    t.datetime "created_at"
    t.integer  "created_by",                                    :default => 0
  end

  create_table "exam_results", :force => true do |t|
    t.date     "exam_at"
    t.decimal  "grade",          :precision => 10, :scale => 2, :default => 0.0
    t.boolean  "has_passed",                                    :default => false
    t.integer  "application_id"
    t.integer  "student_id"
    t.integer  "school_id"
    t.integer  "test_center_id"
    t.datetime "created_at"
    t.integer  "created_by",                                    :default => 0
  end

  create_table "examination_schedules", :force => true do |t|
    t.string   "course_id"
    t.date     "schedule"
    t.datetime "created_at"
    t.integer  "created_by", :default => 0
    t.datetime "updated_at"
    t.integer  "updated_by", :default => 0
  end

  create_table "examinees", :force => true do |t|
    t.integer  "student_id"
    t.string   "examination_type"
    t.integer  "test_center_id"
    t.integer  "examination_schedule_id"
    t.string   "rating"
    t.string   "exam_status"
    t.string   "exam_number"
    t.string   "perrc"
    t.integer  "exam1",                   :default => -1, :null => false
    t.integer  "exam2",                   :default => -1, :null => false
    t.integer  "exam3",                   :default => -1, :null => false
    t.integer  "exam4",                   :default => -1, :null => false
    t.integer  "exam5",                   :default => -1, :null => false
    t.datetime "created_at"
    t.integer  "created_by",              :default => 0
    t.datetime "updated_at"
    t.integer  "updated_by",              :default => 0
  end

  create_table "feedbacks", :force => true do |t|
    t.string   "subject"
    t.text     "description"
    t.boolean  "status",      :default => false
    t.integer  "created_by"
    t.datetime "created_at"
  end

  create_table "old_addresses", :primary_key => "Address_ID", :force => true do |t|
    t.string  "Region",      :limit => 30
    t.string  "Province",    :limit => 30
    t.string  "City_Town",   :limit => 30
    t.integer "Zip_Code",                  :null => false
    t.string  "Rurban_Code", :limit => 20, :null => false
    t.string  "Area_Code",   :limit => 8,  :null => false
  end

  create_table "old_schools", :primary_key => "School_ID", :force => true do |t|
    t.string  "School_Name",      :limit => 100, :null => false
    t.string  "Street_Brgy",      :limit => 50,  :null => false
    t.integer "Address_ID",                      :null => false
    t.string  "PRC_School_Code",  :limit => 10,  :null => false
    t.date    "Created_Date",                    :null => false
    t.integer "Created_By",                      :null => false
    t.date    "Last_Modified",                   :null => false
    t.integer "Modified_By",                     :null => false
    t.string  "Is_Active",        :limit => 1,   :null => false
    t.string  "ChedReg_BoardRes", :limit => 30
    t.string  "Has_CHED",         :limit => 1,   :null => false
  end

  add_index "old_schools", ["Address_ID"], :name => "Address_ID"

  create_table "order_cases", :force => true do |t|
    t.integer  "student_id"
    t.integer  "school_id"
    t.integer  "case_number"
    t.date     "date_submitted"
    t.datetime "created_at"
    t.integer  "created_by"
    t.datetime "updated_at"
    t.integer  "updated_by"
  end

  create_table "payments", :force => true do |t|
    t.integer  "student_id"
    t.integer  "price_id"
    t.string   "or_number"
    t.integer  "examination_schedule_id"
    t.integer  "application_id"
    t.datetime "created_at"
    t.integer  "created_by"
    t.datetime "updated_at"
    t.integer  "updated_by"
  end

  create_table "prc_locations", :force => true do |t|
    t.string   "region"
    t.string   "code"
    t.boolean  "is_satellite", :default => true
    t.datetime "created_at"
    t.integer  "created_by"
    t.datetime "updated_at"
    t.integer  "updated_by"
  end

  create_table "prices", :force => true do |t|
    t.integer "amount",           :limit => 10, :precision => 10, :scale => 0
    t.string  "examination_type"
  end

  create_table "provinces", :force => true do |t|
    t.string  "name"
    t.integer "region_id", :default => 0, :null => false
    t.integer "area_code"
  end

  create_table "regions", :force => true do |t|
    t.string "name"
  end

  create_table "review_centers", :force => true do |t|
    t.string "name"
  end

  create_table "review_schools", :force => true do |t|
    t.string "name"
    t.string "code"
    t.string "address"
  end

  create_table "roles", :force => true do |t|
    t.string "role_code"
    t.string "role_description"
  end

  add_index "roles", ["role_code"], :name => "role_code"

  create_table "rurbans", :force => true do |t|
    t.integer "address_id"
    t.string  "description"
    t.integer "code"
  end

  create_table "school_histories", :force => true do |t|
    t.integer "student_id"
    t.integer "school_id"
    t.date    "date_graduated"
  end

  create_table "school_users", :force => true do |t|
    t.integer "school_id"
    t.integer "user_id"
  end

  create_table "schools", :force => true do |t|
    t.string   "name"
    t.string   "street_brgy"
    t.integer  "address_id",       :default => 0,     :null => false
    t.integer  "region_id"
    t.integer  "province_id"
    t.integer  "town_id"
    t.string   "street"
    t.string   "zip_code"
    t.string   "area_code"
    t.string   "rurban_code"
    t.string   "prc_school_code",                     :null => false
    t.boolean  "is_active",        :default => false
    t.string   "chedreg_boardres"
    t.boolean  "has_ched",         :default => false
    t.datetime "created_at",                          :null => false
    t.integer  "created_by",       :default => 0
    t.datetime "updated_at"
    t.integer  "updated_by",       :default => 0
  end

  create_table "students", :force => true do |t|
    t.string   "firstname"
    t.string   "lastname"
    t.string   "middlename"
    t.string   "year"
    t.string   "sex"
    t.string   "street_brgy"
    t.integer  "region_id"
    t.integer  "province_id"
    t.integer  "town_id"
    t.string   "street"
    t.integer  "zip_code"
    t.integer  "area_code"
    t.string   "country_id"
    t.string   "email"
    t.string   "telephone"
    t.string   "mobile_no"
    t.string   "marital_status"
    t.date     "date_of_birth"
    t.string   "date_of_birth_place"
    t.integer  "pob_region_id"
    t.integer  "pob_province_id"
    t.integer  "pob_town_id"
    t.string   "pob_street"
    t.string   "pob_zip_code"
    t.string   "pob_area_code"
    t.string   "pob_rurban_code"
    t.string   "spouse"
    t.string   "spouse_citizenship_id"
    t.string   "father"
    t.string   "father_citizenship_id"
    t.string   "mother"
    t.string   "mother_citizenship_id"
    t.string   "convicted"
    t.string   "convicted_file"
    t.integer  "school_id"
    t.integer  "course_id"
    t.string   "review_school1"
    t.string   "review_school2"
    t.string   "review_school3"
    t.string   "review_center1"
    t.string   "review_center2"
    t.string   "review_center3"
    t.integer  "foster_id"
    t.date     "released_at"
    t.integer  "created_by"
    t.datetime "created_at"
    t.datetime "updated_by"
    t.datetime "updated_at"
  end

  create_table "test_centers", :force => true do |t|
    t.string   "name"
    t.string   "code"
    t.string   "street_brgy"
    t.integer  "address_id"
    t.datetime "created_at"
    t.integer  "created_by"
    t.datetime "updated_at"
    t.integer  "updated_by"
    t.boolean  "is_active",   :default => false
  end

  create_table "towns", :force => true do |t|
    t.string  "name"
    t.integer "province_id", :default => 0, :null => false
    t.integer "zip_code"
    t.integer "rurban_code"
  end

  create_table "transfer_histories", :force => true do |t|
    t.integer  "student_id"
    t.integer  "school_id"
    t.date     "released_at"
    t.date     "accepted_at"
    t.integer  "new_school_id"
    t.integer  "created_by"
    t.datetime "created_at"
  end

  create_table "users", :force => true do |t|
    t.string   "username"
    t.string   "password"
    t.string   "role_code"
    t.integer  "school_id",   :default => 0
    t.string   "employee_no"
    t.string   "firstname"
    t.string   "lastname"
    t.string   "location"
    t.boolean  "is_active",   :default => false
    t.datetime "created_at"
    t.integer  "created_by"
    t.datetime "updated_at"
    t.integer  "updated_by"
  end

  add_index "users", ["username", "password"], :name => "username_password"

end
