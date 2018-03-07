class User < ApplicationRecord
	has_secure_password
	before_save { self.email = email.downcase }
	before_save { self.login = login.downcase }
	VALID_EMAIL_REGEX = /\A[\w+\-.]+@[a-z\d\-.]+\.[a-z]+\z/
	validates :name, presence: true
	validates :login, presence: true, uniqueness: true, length: { in: 6..20, too_short: "Login muito curto", too_long: "Login muito longo" }
	validates :email, presence: true, uniqueness: { case_sensitive: false }, format: { with: VALID_EMAIL_REGEX }
	validates :password, presence: true, confirmation: true, length: { minimum: 6 }

end
