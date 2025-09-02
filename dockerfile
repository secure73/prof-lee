FROM php:8.3-apache
#set working dir
WORKDIR /var/www/html

#install system dependencies 
#installieren php erweiterungen
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd mysqli pdo_mysql zip
#url rewrite from apache
RUN a2enmod rewrite