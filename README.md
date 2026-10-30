# LabActivity9-Ancog – Barangay Bakuna Tracker

Lab Activity 9 for 4-334 Full-Stack Web Development. Vaccination dashboard for the Barangay Matina Crossing Health Center, built with Laravel Blade, Tailwind CSS v3 and Vite.

## Login

| Email | Password |
| --- | --- |
| nurse.ancog@bakuna.test | bakuna2026 |

## How to run

```sh
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
```

Then run these in two terminals:

```sh
php artisan serve
npm run dev
```

Open http://127.0.0.1:8000 and sign in.

## Pages

- `/login` – sign in
- `/dashboard` – stats, alert banner, overdue and upcoming lists
- `/schedule` – full vaccination schedule table
