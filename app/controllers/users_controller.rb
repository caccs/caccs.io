class UsersController < ApplicationController
	before_action :set_user, only: [:show, :edit, :update, :destroy]

	def index
		@users = User.all
	end

	def new
		@user = User.new
	end

	def create
		@user = User.new(user_params)
		if @user.save(user_params)
			render "index"
			# redirect_to @user
		else
			render "new"
		end
	end

	def show
	end

	def destroy
		if @user.destroy
			render "index"
		end
	end

	private
		def user_params
			params.require(:user).permit(:name, :login, :email, :password, :password_confirmation)
		end

		def set_user
	      @user = User.find(params[:id])
	    end
end
