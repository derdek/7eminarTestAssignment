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

Після запуску проекта, можна отримати дані користувача і токен за цим шляхом GET `localhost:8080/api/users/{user_id}`<br/>
Потрібно додати токен в заголовки запиту, а саме `Authorization`, щоб отримати доступ до захищених маршрутів<br/>
Після додавання токена до заголовка, будуть доступні наступні маршрути:<br/>
GET `localhost:8080/api/tasks`<br/>
POST `localhost:8080/api/tasks`<br/>
GET `localhost:8080/api/tasks/{task_id}`<br/>
PUT `localhost:8080/api/tasks/{task_idid}`<br/>
DELETE `localhost:8080/api/tasks/{task_id}`<br/>



