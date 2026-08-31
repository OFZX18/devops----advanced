FROM php:8.5-fpm-alpine AS base

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/
COPY --from=composer /usr/bin/composer /usr/bin/composer

COPY build/docker/php/files/php/conf.d/*.ini /usr/local/etc/php/conf.d/
COPY build/docker/php/files/php/php-fpm.d/*.conf /usr/local/etc/php-fpm.d/

RUN set -x \
    && apk update

RUN set -x \
    && install-php-extensions \
        intl \
        opcache \
        pdo_mysql \
        zip

WORKDIR /var/www/html

FROM base AS dev

RUN cp "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

COPY build/docker/php/files/ca-certificates/ /usr/local/share/ca-certificates/

RUN set -x \
    && apk add --no-cache \
        ca-certificates \
        git \
        npm \
    && update-ca-certificates

FROM base AS prod

RUN cp "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
