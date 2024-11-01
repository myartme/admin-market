<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

1. Инициализация проекта <br>
git clone https://github.com/myartme/admin-market admin-market<br>
1. Рабочая директория <br>
cd admin-market<br>
1. Запуск контейнера admin-market<br>
docker compose up -d<br>
1. Установка нужных значений директив в локальный .env<br>
DB_CONNECTION=mysql<br>
DB_HOST=mysql<br>
DB_PORT=3306<br>
DB_DATABASE=market_db<br>
DB_USERNAME=root<br>
DB_PASSWORD=localPass<br>
1. Запуск миграций для laravel<br>
docker exec -it market_php bash<br>
php artisan migrate<br>
1. Проверка работоспособности<br>
http://localhost:80<br>
