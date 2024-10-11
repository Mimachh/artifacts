FROM ghcr.io/mimachh/php-apache-8.3:latest

COPY --chown=www-data:www-data . /app/srcs

USER root

RUN chmod -R 755 /app/srcs/storage

USER www-data

 