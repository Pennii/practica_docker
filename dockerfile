# Use an official PHP image with Apache
FROM php:apache

RUN docker-php-ext-install pdo_mysql

# Copiar los certificados
COPY localhost.crt /etc/ssl/certs/localhost.crt
COPY localhost.key /etc/ssl/private/localhost.key

# Copiar el .conf a apache
COPY ./default-ssl.conf /etc/apache2/sites-available/default-ssl.conf

# Habilitar ssl y el sitio default
RUN a2enmod ssl && \
    a2enmod rewrite && \
    a2ensite default-ssl

# Copiar mis vistas a la ruta de apache
COPY ./vistas /var/www/html/
