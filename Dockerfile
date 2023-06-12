FROM composer:2.5.5 as build
COPY . /app/
RUN composer install 

FROM php:8.1-apache-buster as production

ENV APP_ENV=production
ENV APP_DEBUG=false

FROM node:18-alpine
WORKDIR /
COPY ["package.json", "package-lock.json*", "./"]
RUN npm install 
COPY . .
CMD ["node", "test"]