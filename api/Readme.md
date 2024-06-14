- Bukalah terminal dan bikin folder baru 
di tempat kalian menyimpan data perkuliahan

- setelah itu buatlah folder dengan nama api
```
https://github.com/djambred/pemrograman_web/tree/main/api
```

- yang mana struktur foldernya terdiri dari
``` 
|api
|- nginx
|-- Dockerfile
|--- default.conf
|- db
|-- conf.d
|--- my.cnf
|- php
|-- Dockerfile
|-- www.conf
|-- local.ini
|-- docker-entrypoint.sh
| .env
|- src
| docker-compose.yml
```
- lakukan perintah
```
docker-compose up -d --build
```

- setelah selesai masuk kedalam containernya dengan perintah 
```
docker exec -it api_php bash
```

- lakukan perintah didalam containernya 
```
composer create-project laravel/lumen .
```
- setelah itu masih didalam container lakukan perintah 
```
composer require flipbox/lumen-generator
```
- selanjutnya tambahkan dalam folder src/bootstrap/app.php

``` php
$app->withFacades(); 
$app->withEloquent();
$app->register(Flipbox\LumenGenerator\LumenGeneratorServiceProvider::class);
```

- selanjutnya didalam container lakukan perintah 
```
mv .env.example .env
```

- sesuaikan config .env terkait database

- didalam container lakukan perintah 
```
php artisan key:generate
```

- setelah itu hapus file model User.php

```
rm -rf src/app/Model/User.php
```

- setelah itu create model, controller, migration dan seeder;

```
php artisan make:model User -mcfs --resource
```

- tambahkan didalam migrationnya 
```
$table->id();
$table->string('username');
$table->string('password');
$table->timestamp();
```

- tambahkan didalam seedernya
```
public function run() {
    $timestamp = \Carbon\Carbon::now()->toDateTimeString();
    DB::table('users')->insert([
        'username' => 'client';
        'password' => 'password';
        'created_at' => $timestamp;
        'update_at' => $timestamp;
    ]);
}
```

- setelah itu lakukan 
```
php artisan migrate
```


	
