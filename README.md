## About

I wanted to try out htmx, so I implemented CRUD functionality using htmx and Laravel.

## Tech Stack
- Laravel 11
- htmx
- TailwindCSS

## Features
- Select products and add them to the cart
- Increase the quantity of products in the cart
- Remove products from the cart

## Screenshot
|PC layout | SP layout |
|---|--|
|<img src="https://github.com/zumikiti/laravel-htmx-example/blob/images/images/demo-pc.png?raw=true" height="500px"> | <img src="https://github.com/zumikiti/laravel-htmx-example/blob/images/images/demo-sp.png?raw=true" height="500px"> |

## Local Environment Setup

### 1. Setting up DB and Redis
For DB and Redis, I used [webdev](https://github.com/zumikiti/webdev).

```sh
git clone github.com:zumikiti/webdev.git
cd ./webdev
docker-compose up -d pgsql redis
```

Creating the DB

```sh
docker-compose exec pgsql bash
psql -U sail -W
```

```sql
create database laravelhtmx;
```

### 2. Setting up the application
```sh
git clone git@github.com:zumikiti/laravel-htmx-example.git
cd ./laravel-htmx-example
cp .env.example .env

docker-compose up -d
docker-compose exec app bash
composer install
php artisan migrate --seed
```

If you can see the page at the following URL, everything is set up correctly:

http://localhost:8088
