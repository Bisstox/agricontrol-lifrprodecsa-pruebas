FROM php:7.4-apache
RUN docker-php-ext-install mysqli
RUN a2enmod rewrite
COPY . /var/www/html/
