FROM php:7.4-apache

RUN a2enmod rewrite

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

COPY ./src /var/www/html/

EXPOSE 80
