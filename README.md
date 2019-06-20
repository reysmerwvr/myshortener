# myshortener

MyShortener is an API to make an URL shortener.

## Requirements
  - Laravel 
  - MySQL

## Version
1.0.0

## Tech

* [Laravel] - The PHP Framework For Web Artisans
* [Composer] - Dependency Manager for PHP

## Installation

Download zip file and extract it [latest pre-built release](https://github.com/reysmerwvr/myshortener). Or clone the repository and cd into it.

Install the dependencies and start the server.

```sh
cd myshortener
composer install
cp .env.example .env
```

If you don't have `.env` file you can use the example one. Just rename `.env.example` to `.env`. Enter your configuration here (Database and App Url Configurations). Set the application key

```sh
php artisan key:generate
```

## Migrations

Run the following command to run startup migrations.

```sh
php artisan migrate
```

## Run

Run the following command to start the HTTP Server.

```sh
php artisan serve
```

## APIDocs
To generate the APIDocs first you have to install apidoc globally

```sh
npm install apidoc -g
```

After that you can generate the APIDocs running the following commands

```sh
cd myshortener
apidoc -i ./app/Helpers/ -o ./public/apidocs
```

After this you should be able to see the API Documentation in your browser hitting http://localhost/yourprojectname/public/apidocs

APIDocs file [APIDocs](https://github.com/reysmerwvr/myshortener/tree/master/app/Helpers/ApiDocs.php).

## Todos
  - Write tests
  - Add code comments

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does 
its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)

   [Laravel]: <https://laravel.com/>
   [Composer]: <https://getcomposer.org/>