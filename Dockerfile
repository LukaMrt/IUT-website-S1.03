# Stage 1: Composer dependencies
FROM composer:2 AS composer

WORKDIR /app

COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader

# Stage 2: FrankenPHP runtime
FROM dunglas/frankenphp:1.5-php8.4-alpine AS frankenphp

ENV SERVER_NAME=domain.example.com
ENV APP_ENV=prod

WORKDIR /app

# Copy application files
COPY public public
COPY src src
COPY views views

# Copy dependencies from Composer stage
COPY --from=composer /app/vendor vendor
