class Address < ActiveRecord::Base
  belongs_to :region
  belongs_to :province
  belongs_to :town
end