FROM php:8.1.0-fpm
# Define User
RUN usermod -u 1000 www-data
# Install php and extensions
RUN apt-get update && apt-get install -y \
      apt-utils \
      libpq-dev \
      libpng-dev \
      libzip-dev \
      zip unzip \
      git && \
      docker-php-ext-install pdo_mysql && \
      docker-php-ext-install bcmath && \
      docker-php-ext-install gd && \
      docker-php-ext-install zip && \
      apt-get clean && \
      rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

WORKDIR /var/www

COPY --chown=www-data:www-data . .

COPY ./_docker/app/php.ini /usr/local/etc/php/conf.d/php.ini

# Install composer
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN curl -sS https://getcomposer.org/installer | php -- \
    --filename=composer \
    --install-dir=/usr/local/bin
# Giving permissions
RUN chmod -R 755 /var/www/storage
RUN chmod -R 755 /var/www/bootstrap
RUN chmod +x _docker/entrypoint.sh
# Enter entrypoint
ENTRYPOINT [ "_docker/entrypoint.sh" ]
CMD ["-f","/dev/null"]
