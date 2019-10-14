run:
	php artisan serve

reset_db: clear_db
	php artisan migrate
	php artisan db:seed

clear_db:
	echo 'DROP DATABASE laravel; CREATE DATABASE laravel;' | mysql -h 127.0.0.1 -u root -proot

post:
	curl -X POST -H "Content-Type: application/json" --data "{'query': 'tests'}" localhost:8000/graphql
	@echo ""

db:
	mysql -h 127.0.0.1 -u root -proot laravel
