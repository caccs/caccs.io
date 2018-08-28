message = <<-MESSAGE
## Checklist:
- [ ] Run tests locally
- [ ] If you modified some Front files, add ScreenShots!
- [ ] Run tests manually
- [ ] Remove (after you program them) all of your TODOS
- [ ] [Rails Security Checklist](https://github.com/brunofacca/zen-rails-security-checklist)
- [ ] [Rails Style Guide](https://github.com/bbatsov/rails-style-guide)
- [ ] [Ruby Style Guide](https://github.com/bbatsov/ruby-style-guide)
MESSAGE

markdown(message)

warn "Still Work in Progress" if github.pr_title.include? "WIP"

if git.added_files.include?('db/migrate/*.rb') && !git.modified_files.include?('db/schema.rb')
  warn('Run `db:migrate` and commit `schema.rb` file')
end

# TODOS

todoist.warn_for_todos

# TESTS

has_app_changes = !git.modified_files.grep(/(lib|app)/).empty?
has_test_changes = !git.modified_files.grep(/(spec|test)/).empty?

if has_app_changes && !has_test_changes
  message = <<-MESSAGE
If you're still refatoring code, its ok.
But remember to implement tests according to the changes you've made.
  MESSAGE

  warn(message.strip)
end
