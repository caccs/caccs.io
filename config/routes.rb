Rails.application.routes.draw do
  post   '/form',		to: 'email#form'
  get    '/about',   	to: 'pages#about'
  get    '/contact',  	to: 'pages#contact'
  get    '/calendar', 	to: 'calendar#calendar'
  get    '/login',		to: 'sessions#new'
  post   '/login',		to: 'sessions#create'
  delete '/logout',		to: 'sessions#destroy'
  
  resources :users

  root 'calendar#calendar'
end
