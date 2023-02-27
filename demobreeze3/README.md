Create new laravel project with user module with breeze package:
- create new project
composer create-project laravel/laravel:^9.0 example-app

- setup db in .env

- migrate db
php artisan migrate

- download breeze package
composer require laravel/breeze --dev

- install breeze package
php artisan breeze:install

- migrate breeze db
php artisan migrate

- setup npm dependacy
npm install && npm run dev

- run server & test at browser
php artisan serve


