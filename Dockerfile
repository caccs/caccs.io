FROM postgres
FROM ruby:2.3.6
RUN apt-get update -qq && apt-get install -y build-essential libpq-dev nodejs
RUN mkdir /caccs.io
WORKDIR /caccs.io
COPY Gemfile /caccs.io/Gemfile
COPY Gemfile.lock /caccs.io/Gemfile.lock
RUN bundle install
COPY . /caccs.io
