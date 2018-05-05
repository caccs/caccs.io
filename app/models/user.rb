class User < ApplicationRecord
  attr_accessor :remember_token
  has_secure_password
  before_save { self.email = email.downcase }
  before_save { self.login = login.downcase }
  VALID_EMAIL_REGEX = /\A[\w+\-.]+@[a-z\d\-.]+\.[a-z]+\z/
  validates :name, presence: true
  validates :login, presence: true,
                    uniqueness: true,
                    length: { in: 6..20,
                              too_short: 'Login muito curto',
                              too_long: 'Login muito longo' }
  validates :email, presence: true,
                    uniqueness: { case_sensitive: false },
                    format: { with: VALID_EMAIL_REGEX }
  validates :password, presence: true,
                       confirmation: true,
                       length: { minimum: 6 },
                       on: :create

  def self.digest(string)
    cost = if ActiveModel::SecurePassword.min_cost
             BCrypt::Engine::MIN_COST
           else
             BCrypt::Engine.cost
           end
    BCrypt::Password.create(string, cost: cost)
  end

  def self.new_token
    SecureRandom.urlsafe_base64
  end

  def remember
    self.remember_token = User.new_token
    update_attribute(:remember_digest, User.digest(remember_token))
  end

  def authenticated?(remember_token)
    return false if remember_digest.nil?
    BCrypt::Password.new(remember_digest).is_password?(remember_token)
  end

  def forget
    update_attribute(:remember_digest, nil)
  end
end
