INSTALLATION
------------

### Install with Docker

1. Скопируйте файл `.env.example` и переименуйте в `.env`. Заполните настройки, если потребуется
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
