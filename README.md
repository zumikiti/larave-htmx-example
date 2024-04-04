## 何か
htmx を試したかったので、htmx と laravel を使って CRUD 機能を実装してみた。

## 技術スタック 
- laravel 11
- htmx
- tailwindow

## やれること
- 商品を選択してカートに追加
- 商品の個数を追加
- カートから商品の削除

## スクショ
イメージ

## ローカル環境構築

### 1. DB Redis の環境構築
DB と redis は、[webdev](https://github.com/zumikiti/webdev) を使用している

```sh
git clone thub.com:zumikiti/webdev.git
cd ./webdev
docker-compose up -d pgsql redis
```

DB 生成

```sh
docker-compose exec pgsql bash
pgsql -usail -password
```

```sql
create database laravelhtmx;
```

### 2. アプリ側環境構築 
```sh
git clone git@github.com:zumikiti/larave-htmx-example.git
cd ./larave-htmx-example
cp .env.example .env

docker-compose up -d
docker-compose exec app bash
composer i
php artisan migrate --seed
```

以下にアクセスして表示されたらOK

http://localhost:8088
