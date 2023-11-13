# Gembala Cerdas

nambahin command sama note

buat migrate database sama seeder

```
$ php artisan migrate
$ php artisan db:seed UserTestSeeder
```

email dan password untuk test
```
email : test@email.com
password : test1234
```

NOTE : 

- tambahin `value = "{{old('email')}}"` di form login bagian email, biar auto filled ketika ada error, begitu juga di register tapi dengan tambahan `value = "{{old('name')}}"`
- Untuk Controller :
    - UserController itu untuk fitur berkaitan dengan database user (login, logout, register)
- pingin nambahin fitur live searching nanti pas udah ada fiture search