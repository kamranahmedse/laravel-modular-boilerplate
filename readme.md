## Laravel Modular Boilerplate

A **Laravel 5.*** boilerplate for creating modular applications. 

An article explaining how it was created how can you use it can be found through this blog post [Creating a Modular Application in Laravel 5.1](http://kamranahmed.info/blog/2015/12/03/creating-a-modular-application-in-laravel/)

## Setup
Please follow the below steps to setup the application

- Clone the repository 

```bash
git clone http://github.com/kamranahmedse/laravel-modular-boilerplate
```

- Install dependencies via composer

```bash
composer install
```
- Create a `.env` file, maybe by duplication `.env.example` which is already there.
- Generate the key:
```bash
php artisan key:generate
```

- The application is ready. A dummy module called `ModuleOne` has already been added to give you an idea about how it works. The module has some routes, a controller and a dummy model as well. Considering that you are serving the repository via `php artisan serve` at port `8000` you can access the dummy routes placed in `app/Modules/ModuleOne/routes.php` via:

```php
localhost:8000/module-one
localhost:8000/module-one/model-test
``` 

## Adding your Modules
- Create a directory with your module name e.g. `MyAwesomeModule` inside the `app/Modules` directory. Inside this directory create a file called `routes.php` for the routes and create the directories `Controllers`, `Models` and `Views` for your controllers, models and views respectively.

- Open up the file `config/module.php`. This is the file where you will be registring your modules. Add your module name in the `modules` array like this:

```php
return  [
   'modules' => [
       'ModuleOne',
       'MyAwesomeModule'
   ]
];
```

- Inside the `app\Modules\MyAwesomeModule\Controllers` directory, create your controllers with the namespace set to `App\Modules\MyAwesomeModule\Controllers`. In the same way, create the models inside `app\Modules\MyAwesomeModule\Models` directory with the namespace set to `App\Modules\MyAwesomeModule\Models`. And create the view files in the `app\Modules\MyAwesomeModule\Views` directory. Everything i.e. Controllers, models and views in this module work the same, however while using views you will have to specify your views like `MyAwesomeModule::viewName` i.e. you will have to prepend the modulename with the resolution to the start of how you normally access a view.

- For a detailed how-to, I would recommend you to [read this article](http://kamranahmed.info/blog/2015/12/03/creating-a-modular-application-in-laravel/) especially [this part](http://kamranahmed.info/blog/2015/12/03/creating-a-modular-application-in-laravel/#adding-modules). Also you can go through the existing module i.e. `ModuleOne` which has been added just for your reference.



