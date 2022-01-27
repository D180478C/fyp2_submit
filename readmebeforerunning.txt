create database
database name:fypfinal

setup
composer install
php artisan migrate --seed
php artisan key:generate
php artisan storage:link

run php artisan serv