FROM php:8.3-fpm

# Paquetes y extensiones necesarias
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libpng-dev libonig-dev libxml2-dev curl \
    libpq-dev \
 && docker-php-ext-install pdo pdo_pgsql bcmath zip sockets

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

CMD ["php-fpm"]
