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
|<img src="https://private-user-images.githubusercontent.com/30865360/342005614-9af6d8ff-db4d-4006-907a-3ebf30b30b50.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTkxMDM3MTEsIm5iZiI6MTcxOTEwMzQxMSwicGF0aCI6Ii8zMDg2NTM2MC8zNDIwMDU2MTQtOWFmNmQ4ZmYtZGI0ZC00MDA2LTkwN2EtM2ViZjMwYjMwYjUwLnBuZz9YLUFtei1BbGdvcml0aG09QVdTNC1ITUFDLVNIQTI1NiZYLUFtei1DcmVkZW50aWFsPUFLSUFWQ09EWUxTQTUzUFFLNFpBJTJGMjAyNDA2MjMlMkZ1cy1lYXN0LTElMkZzMyUyRmF3czRfcmVxdWVzdCZYLUFtei1EYXRlPTIwMjQwNjIzVDAwNDMzMVomWC1BbXotRXhwaXJlcz0zMDAmWC1BbXotU2lnbmF0dXJlPTQ0YmIzYjU4OWEwZmY1Y2NlOTllZjk0ZWZmY2QxNmE4NzJiNTM0MWI2OGUzMDVmMTI5MTNiZTk5NTY5OWJkZDAmWC1BbXotU2lnbmVkSGVhZGVycz1ob3N0JmFjdG9yX2lkPTAma2V5X2lkPTAmcmVwb19pZD0wIn0.JeOr6XUFdyd8IMeM2OSCUa0dazAwdOiRczuGJeFSKNU" height="500px"> | <img src="https://private-user-images.githubusercontent.com/30865360/342005607-dce89e58-c08b-49fb-b938-b6a598070e45.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTkxMDM3MTEsIm5iZiI6MTcxOTEwMzQxMSwicGF0aCI6Ii8zMDg2NTM2MC8zNDIwMDU2MDctZGNlODllNTgtYzA4Yi00OWZiLWI5MzgtYjZhNTk4MDcwZTQ1LnBuZz9YLUFtei1BbGdvcml0aG09QVdTNC1ITUFDLVNIQTI1NiZYLUFtei1DcmVkZW50aWFsPUFLSUFWQ09EWUxTQTUzUFFLNFpBJTJGMjAyNDA2MjMlMkZ1cy1lYXN0LTElMkZzMyUyRmF3czRfcmVxdWVzdCZYLUFtei1EYXRlPTIwMjQwNjIzVDAwNDMzMVomWC1BbXotRXhwaXJlcz0zMDAmWC1BbXotU2lnbmF0dXJlPWE3ZjgyODJiY2FlMzU0ODI4ZmNmMmIxYzYzMDk1ZWI1ZWIzODllZWZmYmQxZWNkMmI0MTYzNDk5YzhlZTBlZDcmWC1BbXotU2lnbmVkSGVhZGVycz1ob3N0JmFjdG9yX2lkPTAma2V5X2lkPTAmcmVwb19pZD0wIn0.qHOFMLRQSHsAG3P3iaSWGCI4mJIhJrRKs3cCt4wEOrU" height="500px"> |

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
