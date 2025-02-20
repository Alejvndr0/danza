# Usar una imagen base oficial de PHP con FPM
FROM php:8.2-fpm

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    git \
    curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd zip pdo pdo_mysql

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instalar Node.js y npm para Vite
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

# Establecer el directorio de trabajo
WORKDIR /var/www

# Copiar los archivos del proyecto
COPY . .

# Instalar dependencias de Composer y npm
RUN composer install --optimize-autoloader --no-dev \
    && npm install \
    && npm run build

# Configurar permisos
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage

# Exponer el puerto (Render usa 10000 por defecto, pero lo configuramos en el comando de inicio)
EXPOSE 10000

# Comando para iniciar PHP-FPM
CMD ["php-fpm"]