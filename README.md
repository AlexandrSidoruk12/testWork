INSTALLATION
------------

### Install with Docker

1. Переименуйте `.env.example` в `.env` и запоните настроки БД
~~~
   DB_HOST=testwork-mysql-1
   DB_PORT=3306
   DB_NAME=testdb
   DB_USER=testuser
   DB_PASSWORD=testpassword
~~~
2. Запустите команду в корне проекта, которая установит все зависимости. Настроит и запустит парсинг.
~~~
make init
~~~

Все готово, проект готов к запуску. Перейдите на главную страницу

~~~
http://localhost
~~~

TESTING
-------
Тесты находятся в директории `tests`. Разработка велась с помощью [Codeception PHP Testing Framework](https://codeception.com/).

- `unit`
- `functional`

Для запуска тестов

```
vendor/bin/codecept run
```
