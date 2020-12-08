# **V2Board**

- PHP 7.4
- Composer
- MySQL 5.7
- Redis 5

## Demo
[Demo](https://v2board.com)

## Document
[Click](https://docs.v2board.com)

## Install

> Ubuntu18.04


### Dependence

```bash
# PHP
curl -fsSL https://git.io/JIRlS | bash 

# MySQL
curl -fsSL https://git.io/JIRWN | bash 

CREATE DATABASE `v2board` CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_general_ci';

CREATE USER `v2board`@`localhost` IDENTIFIED BY 'S2XeiAgywh7zFM8Egs4j4t1RWJusgu';

GRANT Alter, Alter Routine, Create, Create Routine, Create Temporary Tables, Create View, Delete, Drop, Event, Execute, Index, Insert, Lock Tables, References, Select, Show View, Trigger, Update ON `v2board`.* TO `v2board`@`localhost`;

# Redis
curl -fsSL https://git.io/JIRld | bash 

# pm2 
curl -fsSL https://git.io/JIRle | bash 
```

### Project

```bash
git clone https://github.com/CareyWang/v2board.git && cd v2board 
composer install --no-dev

cp .env.example .env 
# Modify MySQL and Redis options.

php artisan key:generate 
php artisan v2board:install 
php artisan migrate --force 
php artisan config:clear 
php artisan config:cache 
php artisan route:clear 
php artisan route:cache 

pm2 start pm2.yaml 
```

## Other
Telegram Channel: [@v2board](https://t.me/v2board)
