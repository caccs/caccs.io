require 'rails_helper'

RSpec.describe "UsersLogins", type: :request do
  describe "GET /login" do
    it "invalid login" do
      get login_path
      assert_template 'sessions/new'
      post login_path, params: { session: { login: "aa", password: "aa" } }
      assert_template 'sessions/new'
      expect(flash.empty?).to be false
      get root_path
      expect(flash.empty?).to be true
    end
  end
end
