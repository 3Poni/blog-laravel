#!/bin/bash

if [ ! -f "vendor/autoload.php" ]; then
    composer install --no-progress --no-interaction
fi

if [ ! -f ".env" ]; then
    echo "Creating env file for env $APP_ENV"
    cp .env.example .env
fi

if [ ! -L "public/storage" ]; then
    php artisan storage:link
fi

php-fpm -D

tail -f /dev/null

