class UsersController < ApplicationController
	def user_params
		params.require(:user).permit(:name, :login, :email, :password, :password_confirmation)
	end

	def new
		@user = User.new
	end

	def create
		@user = User.new(user_params)
		if !@user.save
			flash[:notice] = "Problem signing up"
		end

		render "new"
	end

	def index
		@users = User.all
	end
end
