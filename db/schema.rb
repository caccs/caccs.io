# rubocop:disable StringLiterals
# rubocop:disable NumericLiterals
ActiveRecord::Schema.define(version: 20180419181310) do
  enable_extension "plpgsql"

  create_table "events", force: :cascade do |t|
    t.string "title"
    t.integer "semester"
    t.datetime "start"
    t.datetime "end"
    t.boolean "allday"
    t.integer "repeating"
    t.string "url"
    t.datetime "created_at", null: false
    t.datetime "updated_at", null: false
  end

  create_table "users", force: :cascade do |t|
    t.string "name"
    t.string "login"
    t.string "email"
    t.string "password_digest"
    t.datetime "created_at", null: false
    t.datetime "updated_at", null: false
    t.string "remember_digest"
    t.index ["email"], name: "index_users_on_email", unique: true
    t.index ["login"], name: "index_users_on_login", unique: true
  end
end
# rubocop:enable NumericLiterals
# rubocop:enable StringLiterals
