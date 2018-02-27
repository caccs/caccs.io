Rails.application.routes.draw do
  post '/form',		to: 'email#form'
  get  '/about',    to: 'pages#about'
  get  '/contact',  to: 'pages#contact'
  get  '/calendar', to: 'calendar#calendar'

  root 'pages#home'
  # For details on the DSL available within this file, see http://guides.rubyonrails.org/routing.html
end
