class SessionsController < ApplicationController
  def new; end

  def create
    sessao = params[:session]

    user = User.find_by(login: sessao[:login].downcase)
    if user && user.authenticate(sessao[:password])
      log_in user
      remember user
      redirect_to user
    else
      flash.now[:alert] = 'Invalid email/password combination'
      render 'new'
    end
  end

  def destroy
    log_out if logged_in?
    redirect_to root_path
  end
end
