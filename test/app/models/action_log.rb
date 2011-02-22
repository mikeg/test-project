class ActionLog < ActiveRecord::Base
  serialize :params
  
  class << self
    def newlog(controller, action, params, user)

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
      case user.role_code.to_s
      when "noa"
          controllers = ["noas"]
          paginate(
                     :per_page => 10,
                     :page => page,
                     :conditions => ["controller IN (?)", controllers],
                     :order => "created_at desc")
      when "cashier"
          controllers = ["cashiers"]
          paginate(
                     :per_page => 10,
                     :page => page,
                     :conditions => ["controller IN (?)", controllers],
                     :order => "created_at desc")
      when "registrar", "foster"
          controllers = ["schools", "chedrecognitions", "status", "students", "transfers"]
          paginate(
                     :per_page => 10,
                     :page => page,
                     :conditions => ["controller IN (?)", controllers],
                     :order => "created_at desc")
      when "admin"
        paginate(
                   :per_page => 10,
                   :page => page,
                   :order => "created_at desc")
      end
    end
    
  end

end