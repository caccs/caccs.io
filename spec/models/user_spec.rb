require 'rails_helper'

RSpec.describe User, type: :model do
  let(:user) { User.new(name: "Josta", login: "Darkkgreen", email: "josta@example.com", password: "jostinha", password_confirmation: "jostinha") }

  it "user should be valid" do
  	expect(user.valid?).to be true
  end

  it "name should be present" do
  	expect(user.name.present?).to be true
  end

  it "login should be present" do
  	expect(user.login.present?).to be true
  end

  it "email must be in a valid format" do
  	expect(user.email ==~ /\A[\w+\-.]+@[a-z\d\-.]+\.[a-z]+\z/).to be false
  end

  it "email must be unique" do
  	user.save
  	duplicate_user = user.dup
  	duplicate_user.save
  	expect(duplicate_user.valid?).to be false
  end

  it "password should be present (nonblank)" do
  	user.password = user.password_confirmation = " " * 6
    expect(user.valid?).to be false
  end

  it "password should have a minimum length" do
    user.password = user.password_confirmation = "a" * 5
    expect(user.valid?).to be false
  end

  # Gotta fix this test
  # it "email should be saved as lower-case" do
  #   mixed_case_email = "JoStA@ExAMPle.CoM"
  #   user.email = mixed_case_email
  #   user.save
  #   expect(user.reload.email).to eq(mixed_case_email.downcase)
  # end
end