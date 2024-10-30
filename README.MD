Для запуска данного проекта потребуется:
- PHP 8.1 или выше
- Composer
- MySQL

Убедитесь, что в системе установлен Composer, затем установите зависимости Laravel:
- composer install

Далее запустите контейнер этой командой:

- ./vendor/bin/sail up

После примените миграции:

- ./vendor/bin/sail artisan migrate

Для запуска локального сервера используйте команду:

- php artisan serve
