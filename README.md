## About
An application to store restaurants, tables and allocated dining area.

## Requirements
- PHP >= 7.*
- Laravel >= 7.*

## Installation 
Laravel utilizes composer to manage its dependencies. So, before using Laravel, make sure you have composer installed on your machine. To download all required packages run this command.
- composer install `OR` COMPOSER_MEMORY_LIMIT=-1 composer install

## Database Setup
You need to create a .env file from. env.example. For this run this command if .env not exists.
-  cp .env.example .env

Then, run this command to create key in .env file if not exists.
- php artisan key:generate

Now, set your database credential against these in .env file.

- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=name
- DB_USERNAME=root
- DB_PASSWORD=

Use these commands to create tables with data.
```
- php artisan migrate
- php artisan db:seed
```

You can update the `PAGE_LIMIT` in the .env variable for pagination. 

## How To Run
- php artisan serve
