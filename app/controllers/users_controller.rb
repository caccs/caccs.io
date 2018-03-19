class UsersController < ApplicationController
	before_action :set_user, only: [:show, :edit, :update, :destroy]
	before_action :reload, only: [:index, :create, :destroy, :update]
	before_action :permission

	def index
		reload
	end

	def new
		@user = User.new
	end

	def create
		@user = User.new(user_params)
		if @user.save(user_params)
			redirect_to users_path
		else
			redirect_to new_user_path
		end
	end

	def show
	end

	def destroy
		if @user.destroy
			@user = nil
			redirect_to users_path
		end
	end

	def edit
		@user = User.find(params[:id])
	end

	def update
	    @user = User.find(params[:id])
	    if @user = @user.update_attributes(user_params)
	    	flash[:success] = "Profile atualizado com sucesso"
    		redirect_to users_path
	    else
	    	flash[:danger] = "Problema com atualização encontrada"
	    	redirect_to edit_user_path
	    end
	end

	private
		def user_params
			params.require(:user).permit(:name, :login, :email, :password, :password_confirmation)
		end

		def set_user
	      	@user = User.find(params[:id])
	    end

	    def reload
	    	@users = User.order(:name).page params[:page]
	    end

	    def permission
	    	if !logged_in?
	    		render :file => 'public/401'
	    	end
	    end
end
