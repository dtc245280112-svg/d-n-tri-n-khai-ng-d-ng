FROM php:8.1-fpm-alpine

# Cài đặt extension mysqli để kết nối MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

WORKDIR /var/www/html
COPY index.php /var/www/html/