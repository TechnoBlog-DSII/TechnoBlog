FROM composer:2.5.5 as build
COPY . /app/
RUN composer install 

FROM php:8.1-apache-buster as production

ENV APP_ENV=production
ENV APP_DEBUG=false

FROM node:16.13.0 as node
COPY . /app/
RUN npm install
COPY . .
RUN npm run dev
CMD ["npm", "run", "dev"]