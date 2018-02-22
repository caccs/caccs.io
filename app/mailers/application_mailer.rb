class ApplicationMailer < ActionMailer::Base
  default to: 'grr.pride@gmail.com'
  layout 'mailer'
end
