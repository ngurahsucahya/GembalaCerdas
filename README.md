# Gembala Cerdas

## About
Final project Basis Data KOM205 Kelompok 4

```
I Gusti Ngurah Sucahya Satria Adi Pratama (G6401221031)
Numero Uno Arroefy (G6401221014)
Ahmad Nur Rohim (G6401221001)
Ryan Muhammad Syahran (G6401221026)
```

## Deploy

requirement : 

- Laravel
- nodejs

step :

1. clone this repository
2. run `npm install`
3. run `npm run build`
4. run `mv .env.example .env` (set .env)
5. run `php artisan migrate`
6. run `php artisan db:seed UserTestSeeder` (optional for user db initialization)
7. run `php artisan serve`

by running step 6, you could login with creds on [Seeder](database/seeders/UserTestSeeder.php).