class Payment < ActiveRecord::Base
  belongs_to :student
  belongs_to :price
end