class UsersController < ApplicationController
	before_action :set_user, only: [:show, :edit, :update, :destroy]

	def new
		@user = User.new
	end

	def create
		@user = User.new(user_params)
		if @user.save
			flash[:notice] = "User created"
		else
			flash[:notice] = "User not created"
		end

		render "index"
	end

	def index
		@users = User.all
	end

	def destroy
		@user.destroy

		render "index"
	end

	private
		def user_params
			params.require(:user).permit(:name, :login, :email, :password, :password_confirmation)
		end

		def set_user
	      @user = User.find(params[:id])
	    end
end
