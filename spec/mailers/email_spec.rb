require "rails_helper"

RSpec.describe EmailMailer, type: :mailer do
  describe "form" do
    let(:mail) { EmailMailer.form }

    it "renders the headers" do
      expect(mail.subject).to eq("Form")
      expect(mail.to).to eq(["to@example.org"])
      expect(mail.from).to eq(["from@example.com"])
    end

    it "renders the body" do
      expect(mail.body.encoded).to match("Hi")
    end
  end

end
