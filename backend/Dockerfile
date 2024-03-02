FROM php:alpine3.19

RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql
COPY --from=composer/composer:latest-bin /composer /usr/bin/composer

WORKDIR /app
COPY . .
ENV TZ=America/Sao_Paulo

EXPOSE 8000