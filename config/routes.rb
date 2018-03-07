Rails.application.routes.draw do
  post '/form',		to: 'email#form'
  get  '/about',    to: 'pages#about'
  get  '/contact',  to: 'pages#contact'
  get  '/calendar', to: 'calendar#calendar'
  
  resources :users

  root 'pages#home'
end
