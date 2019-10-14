run:
	php artisan serve

reset_db: clear_db
	php artisan migrate
	php artisan db:seed

clear_db:
	echo 'DROP DATABASE laravel; CREATE DATABASE laravel;' | mysql -h 127.0.0.1 -u root -proot

db:
	mysql -h 127.0.0.1 -u root -proot laravel
