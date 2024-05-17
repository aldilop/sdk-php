FROM php:7.0-alpine

RUN apk add --virtual .build-deps $PHPIZE_DEPS
RUN pecl install xdebug-2.8.1
RUN echo "zend_extension=/usr/local/lib/php/extensions/no-debug-non-zts-20151012/xdebug.so" \
        >> /usr/local/etc/php/conf.d/99-xdebug.ini
RUN apk del .build-deps
RUN rm -rf /var/cache/apk/*

COPY --from=composer:2.2 /usr/bin/composer /usr/bin/composer
