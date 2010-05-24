class Province < ActiveRecord::Base
  belongs_to :region
  has_many :towns
  belongs_to :prc_location
end