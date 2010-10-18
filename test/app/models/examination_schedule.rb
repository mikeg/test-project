class ExaminationSchedule < ActiveRecord::Base
  belongs_to :course
  belongs_to :applicants
end