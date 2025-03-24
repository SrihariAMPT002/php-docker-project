FROM php:8.2-apache

WORKDIR /var/www/html

COPY src/ .

EXPOSE 80

CMD ["apache2-foreground"]