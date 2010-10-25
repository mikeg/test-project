class FeedbacksController < ApplicationController
  before_filter :require_user

  def create
    feedback = Feedback.new(params[:feedback])
    
    if feedback.save
      redirect_to submitted_feedbacks_path
    end
  end
end