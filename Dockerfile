FROM php:8.4-apache

# 1. Instalar dependencias del sistema requeridas por Composer, Laravel y Node
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    git \
    curl \
    && docker-php-ext-install zip sockets

# 2. Habilitar la reescritura de URLs en Apache (mod_rewrite)
RUN a2enmod rewrite

# 3. Instalar Composer globalmente
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 4. Configurar Apache para apuntar directamente a la carpeta /public de Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# 5. Copiar los archivos del proyecto al contenedor
COPY . /var/www/html
WORKDIR /var/www/html

# 6. Instalar Node.js (Requerido para compilar Vite en Laravel)
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# 7. Instalar dependencias de NPM y COMPILAR EL MANIFIESTO DE VITE (Solución al error)
RUN npm install
RUN npm run build

# 8. Instalar dependencias de Laravel mediante Composer
RUN composer install --no-dev --optimize-autoloader

# 9. Asignar permisos al servidor web para carpetas de almacenamiento y caché
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache