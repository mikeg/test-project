class Province < ActiveRecord::Base
  belongs_to :region
  has_many :towns, :dependent => :destroy
  belongs_to :prc_location
end