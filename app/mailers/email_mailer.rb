class EmailMailer < ApplicationMailer
  default to: 'grr.pride@gmail.com'
  def contact_email(nome, email, message)
    @nome = nome
    @email = email
    @mensagem = message

    mail(to: 'grr.pride@gmail.com', from: email, subject: 'Contato: ' + nome)

    puts "Contato: " + nome
  end
end
