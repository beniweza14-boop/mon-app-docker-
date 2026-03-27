FROM php:8.2-apache

# Installation de l'extension nécessaire pour MySQL
RUN docker-php-ext-install pdo pdo_mysql

# On copie tout le contenu du dossier actuel dans le serveur web
COPY . /var/www/html/

EXPOSE 80