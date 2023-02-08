FROM php:7.4-fpm

RUN apt-get update && apt-get install -y libzip-dev

RUN docker-php-ext-install pdo pdo_mysql

CMD ["php-fpm"]