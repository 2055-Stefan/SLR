FROM php:8.2-apache

# Installiere GD-Erweiterung und Abhängigkeiten
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

# Aktiviere Apache Modulen wie mod_rewrite, falls erforderlich
RUN a2enmod rewrite
