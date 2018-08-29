class EmailMailer < ApplicationMailer
  default to: 'grr.pride@gmail.com'
  def contact_email(nome, email, message)
    @nome = nome
    @email = email
    @mensagem = message

    headers['X-SMTPAPI'] = '{"category": "Contato"}'

    mail(to: 'grr.pride@gmail.com',
         from: 'grr.pride@gmail.com',
         reply_to: email,
         subject: 'Contato: ' + nome,
         keywords: 'Contato')
  end
end
