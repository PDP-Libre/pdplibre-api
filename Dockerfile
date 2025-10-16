FROM php:8.4.13-fpm-bookworm AS php-84
FROM nginx:1.28.0 AS reverse-proxy

FROM php-84 AS php-base

RUN apt-get update \
 && apt-get install -y --no-install-recommends \
        zlib1g-dev \
        git \
        unzip \
        libmcrypt-dev \
        build-essential \
        chrpath \
        libssl-dev \
        ca-certificates \
        libzip-dev \
        libonig-dev \
 && update-ca-certificates \
 && docker-php-ext-install zip opcache \
 && apt-get purge -y --auto-remove -o APT::AutoRemove::RecommendsImportant=false \
 && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN groupadd --gid 1000 app \
 && useradd --uid 1000 --gid app --create-home app \
 && mkdir -p /app \
 && chown -R 1000:1000 /app


FROM php-base AS php-builder
RUN apt-get update \
 && apt-get install -y --no-install-recommends curl wget gnupg dirmngr xz-utils libatomic1 \
 && update-ca-certificates \
 && apt-get purge -y --auto-remove -o APT::AutoRemove::RecommendsImportant=false \
 && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# https://github.com/composer/getcomposer.org/commits/main
# https://github.com/composer/composer/releases
RUN curl -sS https://raw.githubusercontent.com/composer/getcomposer.org/93dcb87e6dec5783a15fff51da1aa79fc4179c46/web/installer -o composer-setup.php \
 && php composer-setup.php --version="2.8.12" --install-dir=/usr/local/bin --filename=composer \
 && composer --version \
 && rm composer-setup.php

WORKDIR /app
USER app


FROM php-base AS php-runner
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini" \
 && echo 'upload_max_filesize = 10M' > "$PHP_INI_DIR/conf.d/upload-file.ini" \
 && echo 'memory_limit = 256M' >> "$PHP_INI_DIR/conf.d/upload-file.ini"

CMD ["php-fpm"]
WORKDIR /app
USER app


FROM gitlab-registry.teams.kickbanking.com/kickbanking/dockerimages/reverse-proxy:5170d1b8e048a9dc218ee38fc6dfb1aaadd23c8a AS http-server


FROM php-builder AS php-builder-with-vendors
ADD composer.json composer.lock /app/
RUN composer --version \
 && composer install  \
    --ignore-platform-reqs \
    --no-ansi \
    --no-autoloader \
    --no-interaction \
    --no-scripts


FROM php-builder-with-vendors AS build
ADD --chown=app:app . /app

RUN composer install --optimize-autoloader


FROM php-runner AS runner

COPY --from=php-builder-with-vendors /app/vendor /app/vendor

COPY --from=build /app/bootstrap /app/bootstrap
COPY --from=build /app/src /app/src
COPY --from=build /app/public /app/public
COPY --from=build /app/vendor/autoload.php /app/vendor/autoload.php
COPY --from=build /app/vendor/composer /app/vendor/composer


FROM reverse-proxy AS server-base
WORKDIR /app
EXPOSE 8080

FROM server-base AS server
ADD ./nginx.conf /etc/nginx/conf.d/default.conf
COPY --from=build /app/public /app/public
