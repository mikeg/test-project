class Region < ActiveRecord::Base
  has_many :provinces, :dependent => :destroy
end