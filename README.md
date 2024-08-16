Підготовка проекта
```bash
composer install

cp .env.example .env

php artisan key:generate
```

Перший запуск проекта
```bash
docker compose up -d

docker compose exec app php artisan migrate:fresh --seed --seeder=DatabaseSeeder
```

Просто запуск проекта
```bash
docker compose up -d
```

Зупинка проекта
```bash
docker compose down
```

Я дивився і пробував різні методи використання orm, але не виходило їх реалізувати, так як хотілось, 
щоб це було і гарно, і зрозуміло, тому я використав простий join, також я використав пагінацію, 
я надаю перевагу використовувати її всюди, де передбачається видача елементів, кількість яких з часом може змінюватись
