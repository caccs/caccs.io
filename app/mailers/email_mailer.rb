class EmailMailer < ApplicationMailer
  def contact_email(name, email, message)
    @nome = name
    @email = email
    @mensagem = message

    mail(subject: 'Welcome to My Awesome Site')

    puts "foi"
  end
end
