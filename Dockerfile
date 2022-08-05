FROM ghcr.io/linkorb/php-docker-base:php8

EXPOSE 80

ENV APP_ENV=prod
ARG PACKAGIST_TOKEN
ARG PACKAGIST_USER

COPY --chown=www-data:www-data . /app

WORKDIR /app

USER www-data

RUN /usr/bin/composer config --global --auth http-basic.repo.packagist.com "$PACKAGIST_USER" "$PACKAGIST_TOKEN"
RUN COMPOSER_MEMORY_LIMIT=-1 /usr/bin/composer install --no-scripts --no-dev
RUN npm install && node_modules/.bin/encore production && rm -rf node_modules

USER root
ENTRYPOINT ["apache2-foreground"]
