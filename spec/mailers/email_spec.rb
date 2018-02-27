require "rails_helper"

RSpec.describe EmailMailer, type: :mailer do
  describe "contact_email" do
    let(:mail) { EmailMailer.contact_email('aa', 'grr.pride@gmail.com', 'aa') }

    it "renders the headers" do
      expect(mail.subject).to eq('Contato: aa')
      expect(mail.to).to eq(['grr.pride@gmail.com'])
      expect(mail.from).to eq(['grr.pride@gmail.com'])
    end

    it "renders the body" do
      expect(mail.body.encoded).to match('aa')
    end
  end

end
