class EmailMailer < ApplicationMailer
	
	
  def self.send(name, email, message)
    @nome = name
    @email = email
    @mensagem = message

    mail(to: "grr.pride@gmail.com", subject: 'Welcome to My Awesome Site')

    puts "foi"
  end
end
