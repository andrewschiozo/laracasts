# [30 Days to Learn Laravel](https://laracasts.com/series/30-days-to-learn-laravel-11)

![image](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![image](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![image](https://img.shields.io/badge/Sqlite-003B57?style=for-the-badge&logo=sqlite&logoColor=white)
![image](https://img.shields.io/badge/Composer-885630?style=for-the-badge&logo=Composer&logoColor=white)

### 01 - Hello, Laravel

Extensões habilitadas no php.ini: **curl, fileinfo, mbstring, openssl, pdo_sqlite**

Instalar o [Composer](https://getcomposer.org/)

Instalar o laravel (cli)

`$ composer global require "laravel/installer"`

Novo projeto laravel

`$ laravel new example`

    Starter kit: [none]
    Testing framework: [Pest]
    Database: [sqlite]
    run npm install and npm run build? [yes]

Para testar:

`$ cd example`

`$ php artisan serve`

INFO  Server running on [http://127.0.0.1:8000].
___

### 02 - Your First Route and View

>laracasts/example/routes/web.php
````
Route::get('/', function () {
    return view('welcome');
});

````


>laracasts/example/resources/views/welcome.blade.php
````
<html>
    <head></head>
    <body>
        <h1>Hello, world</h1>
    </body>
</html>

````

Testes de rotas com retorno de string, array e de view().
>laracasts/example/routes/web.php
````
//Return string Foo, bar
Route::get('/string', function () {
    return 'Foo, bar';
});

//Return json {"foo":"bar"} with content-type: application/json
Route::get('/array', function () {
    return ['foo' => 'bar'];
});

````

Arrays são convertidos para json no response.