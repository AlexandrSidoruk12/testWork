init: init-app
up: up-app
stop: stop-app

init-app: docker-init docker-up composer-install migrations-up parse-currency

up-app: docker-up

stop-app: docker-stop

docker-init:
	docker-compose build

docker-up:
	docker-compose up -d

docker-stop:
	docker-compose stop

composer-install:
	docker-compose run --rm php composer install

composer-update:
	docker-compose run --rm php composer update

migrations-up:
	sleep 20
	docker-compose run --rm php /var/www/html/yii migrate/up --interactive=0

parse-currency:
	docker-compose run --rm php /var/www/html/yii currency-parser/parse-currency