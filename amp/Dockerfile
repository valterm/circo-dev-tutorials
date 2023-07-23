FROM php:8.0-apache

# Enable required Apache modules
RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

RUN a2enmod rewrite

# RUN apt install php-mysqli

# Set the working directory
WORKDIR /var/www/html

# Copy the site data to the container
COPY ./site/ .

# Expose port 80 for the webserver
EXPOSE 80