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




	
