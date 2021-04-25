FROM php:8.0.2-fpm-buster
RUN apt-get update \
 && apt-get install -y --no-install-recommends \
  libzip-dev \
  unzip \
  git \
  vim \
 && docker-php-ext-install pdo_mysql
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

