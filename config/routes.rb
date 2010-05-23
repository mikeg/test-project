#PM 0929 991 3180 - smartbro
#09064774901
ActionController::Routing::Routes.draw do |map|
  # The priority is based upon order of creation: first created -> highest priority.

  # Sample of regular route:
  #   map.connect 'products/:id', :controller => 'catalog', :action => 'view'
  # Keep in mind you can assign values other than :controller and :action

  # Sample of named route:
  #   map.purchase 'products/:id/purchase', :controller => 'catalog', :action => 'purchase'
  # This route can be invoked with purchase_url(:id => product.id)

  # Sample resource route (maps HTTP verbs to controller actions automatically):
  #   map.resources :products

  # Sample resource route with options:
  #   map.resources :products, :member => { :short => :get, :toggle => :post }, :collection => { :sold => :get }

  map.root :controller => "sessions", :action => "new"
  map.resource :sessions, :controller => "sessions",
    :collection => { :authenticate => :post,
                     :stop => :get,
                     :index => :get
       }


  # Sample resource route with sub-resources:
  #   map.resources :products, :has_many => [ :comments, :sales ], :has_one => :seller
  
  # Sample resource route with more complex sub-resources
  #   map.resources :products do |products|
  #     products.resources :comments
  #     products.resources :sales, :collection => { :recent => :get }
  #   end

  # Sample resource route within a namespace:
  #   map.namespace :admin do |admin|
  #     # Directs /admin/products/* to Admin::ProductsController (app/controllers/admin/products_controller.rb)
  #     admin.resources :products
  #   end

  # You can have the root of your site routed with map.root -- just remember to delete public/index.html.
  # map.root :controller => "welcome"

  map.resource :dashboard, :controller => "dashboard"
  map.resources :feedback, :controller => "feedback"
  map.resources :schools, :controller => "schools", :collection => { :show_users => :get,
                                                                     :adduser => :get,
                                                                     :search => :post}
  map.resources :prc_locations, :controller => "prc_locations", :collection => { :update_province => :get }
  map.resources :cashiers, :controller => "cashiers", :collection => { :history => :get,
                                                                       :list_students => :get,
                                                                       :search_student => :get},
                                                      :member => {:pay => :put }
  map.resources :noas, :controller => "noas", :collection => { :history => :get,
                                                               :list_students => :get,
                                                               :search_student => :get},
                                                      :member => {:perrc => :put }
  map.resources :fosters, :controller => "fosters"
  map.resources :students, :controller => "students", :member => { :view => :get,
                                                                   :newapplication => :get
                                                                 }, 
                                                      :collection => {:search => :post,
                                                                      :with_foster => :get,
                                                                      :repeater => :get,
                                                                      :new_application => :get}
  map.resources :reports, :controller => "reports"
  map.resources :nles, :controller => "nles", :collection => { :list_examinees => :get,
                                                               :paid_examinees => :get,
                                                               :testing_center => :get,
                                                               :results => :get},
                                              :member => { :update_special_order => :put }
  map.resources :addresses, :controller => "addresses", :collection => { :show_provinces => :get, 
                                                                         :show_towns => :get,
                                                                         :edit_towns => :get,
                                                                         :add_provinces => :get,
                                                                         :add_regions => :get,
                                                                         :add_towns => :get}
  map.resources :users, :controller => "users"
  map.resources :status_reports, :controller => "status_reports", :collection => {:search => :post}
  map.resources :transfers, :controller => "transfers", :collection => { :search => :post, 
                                                                         :accept => :get,
                                                                         :release => :get,
                                                                         :history => :get },
                                                        :member => { :accept_student => :put,
                                                                     :release_student => :put }
  map.resources :chedrecognitions, :controller => "chedrecognitions", :member => {:chedreg => :post}

  map.resources :regions, :controller => "regions"
  map.resources :provinces, :controller => "provinces"
  map.resources :towns, :controller => "towns"

  # See how all your routes lay out with "rake routes"

  # Install the default routes as the lowest priority.
  # Note: These default routes make all actions in every controller accessible via GET requests. You should
  # consider removing or commenting them out if you're using named routes and resources.
  map.connect ':controller/:action/:id'
  map.connect ':controller/:action/:id.:format'
end
