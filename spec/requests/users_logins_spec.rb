require 'rails_helper'

RSpec.describe "UsersLogins", type: :request do
  describe "GET /login" do
    it "invalid login" do
      # get login_path
      # post login_path, params: { session: { login: "", password: "aa" } }
      # expect(flash.empty?).to be false
      # get root_path
      # expect(flash.empty?).to be true
    end
  end
end
