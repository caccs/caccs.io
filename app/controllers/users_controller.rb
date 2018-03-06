class UsersController < ApplicationController
	# Acho que não vai nem chegar a entrar aqui
	def new
		@user = User.new
	end

	# Acho que não vai nem chegar a entrar aqui
	def create
		@user = User.new(params[:user])
		if @user.save
			flash[:notice] = "You signed up successfully"
			flash[:color]= "valid"
		else
			flash[:notice] = "Won't sign up"
			flash[:color]= "invalid"
		end

		render "new"
	end
end
