FROM php:8.2-fpm-alpine

WORKDIR /var/www/laravel

RUN docker-php-ext-install pdo pdo_mysql
RUN apk add --no-cache libxml2-dev && docker-php-ext-install xml
