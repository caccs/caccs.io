# Class that controls how we send emails
class EmailController < ApplicationController
  def form
    parametros = params['person']

    nome = parametros['name'].to_s
    email = parametros['email'].to_s
    mensagem = parametros['message'].to_s

    EmailMailer.contact_email(nome, email, mensagem).deliver_now!
    flash[:notice] = 'Email enviado com sucesso!'
    redirect_to contact_path
  end
end
