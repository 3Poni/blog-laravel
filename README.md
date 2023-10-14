# About

This is a blog (study-project)

## Running with Docker
Download this repository, extract

From extraction folder RUN this command:

```bash
docker-compose up
```

Wait until all the packages are installed and php-fpm is running

## Running with NO Docker
Download this repository, extract

From extraction folder RUN these commands:

```bash
composer update
php artisan storage:link
php artisan serve
```

Notice: don't forget to set up an env file

## Usage

By default app is avalaible at:

```
http://127.0.0.1:8000/
```
There is a role-system for Users

| Login | Password | Role |
|:---------:|:---------:|:---------:|
| admin@mail.ru | 12345678 | Admin |
| dmitriy@mail.ru | 12345678 | User |

There is an SQLite database installed, so no need to use migrations, i'll add them later with seeders

