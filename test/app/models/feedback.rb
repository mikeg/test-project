class Feedback < ActiveRecord::Base
  validates_presence_of :name, :subject, :description
end