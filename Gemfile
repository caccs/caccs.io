source 'https://rubygems.org'

git_source(:github) do |repo_name|
  repo_name = "#{repo_name}/#{repo_name}" unless repo_name.include?('/')
  "https://github.com/#{repo_name}.git"
end

gem 'bcrypt', '~> 3.1.11'
gem 'bootstrap-sass', '3.3.7'
gem 'bootstrap3-datetimepicker-rails', '~> 4.17.47'
gem 'coffee-rails', '~> 4.2'
gem 'danger'
gem 'danger-github_ext'
gem 'danger-simplecov_json'
gem 'danger-todoist'
gem 'font-awesome-rails'
gem 'fullcalendar-rails'
gem 'jbuilder', '~> 2.5'
gem 'jquery-rails'
gem 'kaminari'
gem 'mailjet'
gem 'momentjs-rails'
gem 'parsley-rails'
gem 'puma', '~> 3.7'
gem 'rails', '~> 5.1.4'
gem 'sass-rails', '~> 5.0'
gem 'turbolinks', '~> 5'
gem 'uglifier', '>= 1.3.0'
gem 'validates_timeliness', '~> 4.0'

group :development, :test do
  gem 'brakeman'
  gem 'byebug', '~> 9.1.0'
  gem 'capybara', '~> 2.13'
  gem 'factory_girl_rails', '~> 4.8.0'
  gem 'pronto'
  gem 'pronto-brakeman'
  gem 'pronto-fasterer'
  gem 'pronto-flay'
  gem 'pronto-rails_best_practices'
  gem 'pronto-rails_schema'
  gem 'pronto-reek'
  gem 'pronto-rubocop'
  gem 'pronto-simplecov'
  gem 'pry', '~> 0.11.1'
  gem 'pry-byebug', '~> 3.5.0'
  gem 'rails-controller-testing'
  gem 'rails_best_practices'
  gem 'reek'
  gem 'rspec', '~> 3.7'
  gem 'rspec-rails', '~> 3.7'
  gem 'rspec_junit_formatter'
  gem 'rubocop'
  gem 'selenium-webdriver'
end

group :development do
  gem 'guard'
  gem 'guard-rails'
  gem 'guard-rspec'
  gem 'guard-rubocop'
  gem 'listen', '>= 3.0.5', '< 3.2'
  gem 'spring'
  gem 'spring-watcher-listen', '~> 2.0.0'
  gem 'web-console', '>= 3.3.0'
end

group :production do
  gem 'pg', '~> 0.20'
end

gem 'tzinfo-data', platforms: %i[mingw mswin x64_mingw jruby]
