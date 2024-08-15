to prepare the project
```bash
composer install

cp .env.example .env

php artisan key:generate
```

to first run the project
```bash
docker compose up -d

docker compose exec app php artisan migrate:fresh --seed --seeder=DatabaseSeeder
```

to run the project
```bash
docker compose up -d
```

to stop the containers of project
```bash
docker compose down
```
