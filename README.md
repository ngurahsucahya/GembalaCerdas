# Gembala Cerdas

nambahin command sama note

buat migrate database sama seeder

```
$ php artisan migrate
$ php artisan db:seed UserTestSeeder
```

untuk refresh database jika ada kolum tambahan dll
```
$ php artisan migrate:refresh --seed
```

Edit file css via resources lalu di kompile dengan npm

dilakukan sekali di awal 
```
$ npm install
```

untuk kompile
```
$ npm run build
```

email dan password untuk test
bisa di cek di [Seeder](database/seeders/UserTestSeeder.php)

NOTE : 

- tambahin `value = "{{old('email')}}"` di form login bagian email, biar auto filled ketika ada error, begitu juga di register tapi dengan tambahan `value = "{{old('name')}}"`
- Untuk Controller :
    - UserController itu untuk fitur berkaitan dengan database user (login, logout, register)
- pingin nambahin fitur live searching nanti pas udah ada fiture search