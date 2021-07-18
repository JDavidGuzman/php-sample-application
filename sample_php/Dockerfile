FROM php:7.3.29-apache-buster

RUN docker-php-ext-install pdo pdo_mysql
RUN a2enmod rewrite

RUN apt-get update && apt-get install -y wget unzip
COPY ./ /usr/local/lib/php/
WORKDIR /usr/local/lib/php/
RUN make

RUN mv web/* /var/www/html && rmdir web/
RUN touch logs/error.log && chown www-data:www-data logs/error.log
RUN mv config-dev/ dic/ && mv config dic/

RUN sed -i '29 i Include /usr/local/lib/php/dic/config/vhost.conf' /etc/apache2/sites-available/000-default.conf

RUN adduser user --disabled-password
USER user
WORKDIR /home/user