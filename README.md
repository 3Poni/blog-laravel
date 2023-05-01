#About

This is a blog (study-project)

## Running with Docker
Download this repository, extract
From extraction folder RUN this command:
```bash
docker-compose up -d
```
## Running with NO Docker
Download this repository, extract 
From extraction folder RUN these commands:
```bash
composer update
php artisan storage:link
php artisan serve
```
## Usage
App is avalaible at:
```
http://127.0.0.1:8000/
```
There is a role-system for Users
| Login | Password | Role |
|:---------:|:---------:|:---------:|
| admin@mail.ru | 12345678 | Admin |
| dmitriy@mail.ru | 12345678 | User |

There is a sqlite database installed, so no need to use migrations, i'll add them later with seeders

