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
sudo apt update 

# PHP
curl -fsSL https://git.io/JIRlS | bash 
sudo apt install php7.4-redis 

# MySQL
curl -fsSL https://git.io/JIRWN | bash 

CREATE DATABASE `v2board` CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_general_ci';

CREATE USER `v2board`@`localhost` IDENTIFIED BY 'S2XeiAgywh7zFM8Egs4j4t1RWJusgu';

GRANT Alter, Alter Routine, Create, Create Routine, Create Temporary Tables, Create View, Delete, Drop, Event, Execute, Index, Insert, Lock Tables, References, Select, Show View, Trigger, Update, Process ON `v2board`.* TO `v2board`@`localhost`;

# Redis
curl -fsSL https://git.io/JIRld | bash 

# pm2 
curl -fsSL https://git.io/JIRle | bash 
```

### Project

```bash
mkdir -p /var/www/http && cd /var/www/http 
git clone https://github.com/CareyWang/v2board.git && cd v2board 
composer install --no-dev
chmod -R 777 storage

cp .env.example .env 

php artisan key:generate 
php artisan v2board:install 
php artisan config:clear 
php artisan config:cache

pm2 start pm2.yaml 

echo '* * * * * root php /var/www/http/v2board/artisan schedule:run' >> /etc/crontab 

chown -R www-data:www-data /var/www/http/v2board
```

## Other
Telegram Channel: [@v2board](https://t.me/v2board)
