class EmailMailer < ApplicationMailer
  def send(name, email, message)
    @nome = name
    @email = email
    @mensagem = message

    mail(subject: 'Welcome to My Awesome Site')

    puts "foi"
  end
end
