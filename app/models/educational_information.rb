class EducationalInformation < ActiveRecord::Base
  belongs_to :course
  belongs_to :school
end