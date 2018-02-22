class EmailController < ApplicationController
	def form
		nome = params["person"]["name"].to_s
	  	email = params["person"]["email"].to_s
	  	mensagem = params["person"]["message"].to_s

	  	EmailMailer.send(nome, email, mensagem).deliver_now
	end
end
