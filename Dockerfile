# Dockerfile para Laravel + PostgreSQL en Render
FROM php:8.2-cli

# Instala dependencias del sistema y extensiones de PHP
RUN apt-get update && apt-get install -y \
    libpq-dev \
    unzip \
    git \
    && docker-php-ext-install pdo pdo_pgsql

# Instala Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Copia el código de la app
WORKDIR /app
COPY . /app

# Instala dependencias de Laravel
RUN composer install --optimize-autoloader --no-dev

# Genera el cache de configuración
RUN php artisan config:cache

# Expone el puerto 10000
EXPOSE 10000

# Comando para iniciar Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=10000"]
