FROM php:7.3-fpm

COPY . .
WORKDIR .

RUN apt update
RUN apt -y install zip \
                zlib1g-dev \
                libzip-dev
RUN docker-php-ext-install zip
RUN apt -y autoremove
RUN usermod -u 1000 www-data && su -c "chown -R www-data:www-data /var/www/html/ $COMPOSER_HOME ."

RUN bash -c "curl http://getcomposer.org/composer.phar --output /usr/local/bin/composer && chmod 755 /usr/local/bin/composer"
ENV COMPOSER_HOME=/usr/config/composer
RUN composer install \
      --no-scripts \
      --no-autoloader \
      --ignore-platform-reqs

USER www-data
