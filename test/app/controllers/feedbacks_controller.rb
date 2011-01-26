class FeedbacksController < ApplicationController
  before_filter :require_user

  def create
    feedback = Feedback.new(params[:feedback])

    ActionLog.newlog(controller_name, action_name, feedback.changes, current_user)

    if feedback.save
      redirect_to submitted_feedbacks_path
    end
  end
end