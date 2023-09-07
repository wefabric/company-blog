# Company blog

The purpose of this repository is to show good development practices on [Laravel](http://laravel.com/) as well as to present cases of use of the framework's features like:

- [Authentication](https://laravel.com/docs/9.x/authentication)
- API
  - Token authentication
  - Versioning
- [Blade](https://laravel.com/docs/9.x/blade)
- [Broadcasting](https://laravel.com/docs/9.x/broadcasting)
- [Cache](https://laravel.com/docs/9.x/cache)
- [Email Verification](https://laravel.com/docs/9.x/verification)
- [Filesystem](https://laravel.com/docs/9.x/filesystem)
- [Helpers](https://laravel.com/docs/9.x/helpers)
- [Horizon](https://laravel.com/docs/9.x/horizon)
- [Localization](https://laravel.com/docs/9.x/localization)
- [Mail](https://laravel.com/docs/9.x/mail)
- [Migrations](https://laravel.com/docs/9.x/migrations)
- [Policies](https://laravel.com/docs/9.x/authorization)
- [Providers](https://laravel.com/docs/9.x/providers)
- [Requests](https://laravel.com/docs/9.x/validation#form-request-validation)
- [Seeding & Factories](https://laravel.com/docs/9.x/seeding)
- [Testing](https://laravel.com/docs/9.x/testing)
- [Homestead](https://laravel.com/docs/9.x/homestead)

## Installation

To create your development environment [follow these instructions](https://laravel.com/docs/10.x/installation).

Setting up your development environment on your local machine:
```bash
$ git clone https://github.com/wefabric/company-blog.git
$ cd company-blog
$ cp .env.example .env
$ php artisan key:generate
$ php artisan horizon:install
$ php artisan telescope:install
$ php artisan storage:link
```

## Before starting
You need to run the migrations with the seeds :
```bash
$ php artisan migrate --seed
```

This will create a new user that you can use to sign in :
```yml
email: darthvader@deathstar.ds
password: 4nak1n
```

And then, compile the assets :
```bash
$ yarn dev # or yarn watch
```

## Useful commands
Seeding the database :
```bash
$ php artisan db:seed
```

Running tests :
```bash
$ php artisan test
```

Running Laravel Pint :
```bash
$ ./vendor/bin/pint --verbose --test
```

Generating backup :
```bash
$ php artisan vendor:publish --provider="Spatie\Backup\BackupServiceProvider"
$ php artisan backup:run
```

Generating fake data :
```bash
$ php artisan db:seed --class=DevDatabaseSeeder
```

Discover package
```bash
$ php artisan package:discover
```

In development environment, rebuild the database :
```bash
$ php artisan migrate:fresh --seed
```

## License

This project is released under the [MIT](http://opensource.org/licenses/MIT) license.
