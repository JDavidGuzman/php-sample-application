FROM php:7.3.29-apache-buster

RUN apt-get update && apt-get install -y wget unzip
RUN docker-php-ext-install pdo pdo_mysql
COPY ./ /usr/local/lib/php/
WORKDIR /usr/local/lib/php/
RUN make

RUN mv web/* /var/www/html
RUN touch logs/error.log && chown www-data:www-data logs/error.log
RUN mv config-dev/ dic/ && mv config dic/