FROM php:5.6-apache

MAINTAINER Eugene Sawfly aka Yevgeniy Trach <eugene.sawfly@gmail.com>

COPY ./php.ini /usr/local/etc/php/
COPY ./test_shop_app.conf /etc/apache2/sites-available/
WORKDIR /var/www/test_shop.app/public

EXPOSE 80 443
