# Use the official PHP image with Apache
FROM php:8.2-apache

# Copy your project files into the container
COPY . /var/www/html/

# Expose port 80 to Render
EXPOSE 80

# Enable Apache rewrite module
RUN a2enmod rewrite
