Setup laravel with User Module using Breeze.

- Create new project:
use this if want to use the latest laravel version:
composer create-project laravel/laravel demobreeze1


use this if want specified version.exp version 9
composer create-project --prefer-dist laravel/laravel your-project-name "9.*"




cd demo
git init
git add .
git commit -m 'install framework'


- download laravel breeze package
composer require laravel/breeze --dev

- check success download or not:
php artisan

- install breeze scaffolding:
php artisan breeze:install

- check file have been install or not
git status

- check node is install or not:
node -v

- check npm is install or not:
npm -v


- install node / fe dependancy for breeze
npm install && npm run dev

run server and check at browser:
php artisan serve


- setup db using sqlite (rapid prototype purpose)
setup env to use sqlite:
DB_CONNECTION=sqlite 
- create database.sqlite file inside database folder
- get the file absolute path as db name at set it to DB_DATABASE in .env
/../demo/database/database.sqlite
- migrate the db
php artisan migrate

- test fontend to reg/login/logout