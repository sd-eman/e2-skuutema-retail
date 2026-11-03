# Skuutema Retail

Design project E2: a retail platform for a supermarket chain. This repository is a starting point for the developers who build the rest.

## What is included
- Database (migrations, models, seeders) generated from the ERD with Blueprint (`draft.yaml`)
- Admin panel with Filament for every table
- Test data and an admin login
- Task board with the backlog: [link to GitHub Project]

## Tech stack
Laravel 13.39.0, PHP 8.4, Filament 5.11.0, Blueprint 2.13.0, Fortify 1.41.0, Tailwind CSS 4.3.3, SQLite (development), Laravel Herd

## Getting started
You need PHP 8.3 or higher, Composer, Node.js and Git.

```
git clone [repository url]
cd e2-skuutema-retail
composer install
npm install
copy .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
npm run dev
```

Open `/admin` and log in with `admin@example.com` / `password` (test data only).

## Roles
Stock manager, store manager, customer service, management.

## Next steps
See the task board for the backlog: permissions per role, inventory, complaints, customer ordering, dashboards and the mobile barcode scanner.

## Documentation
Design documents are in the `docs/` folder.
