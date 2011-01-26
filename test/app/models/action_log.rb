class ActionLog < ActiveRecord::Base
  serialize :params
  
  class << self
    def newlog(controller, action, params, user)
      puts params.inspect
      unless params.empty?
        log               = ActionLog.new
        log.controller    = controller
        log.action        = action
        log.params        = params.to_a
        log.user_id       = user.id
        log.user_fullname = user.fullname
        log.save
      end
    end
    
    def get_logs(user, page)
      paginate(
                 :per_page => 10,
                 :page => page,
                 :order => "created_at desc")
    end
    
  end

end