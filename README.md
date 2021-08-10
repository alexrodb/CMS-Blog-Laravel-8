<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel
-------------------------------------

composer global require laravel/installer

laravel new cmsblog --jet

C:\xampp\htdocs> laravel new CMSBlogLaravel --jet

Which Jetstream stack do you prefer?
  [0] livewire
  [1] inertia
 > 0

 Will your application use teams? (yes/no) [no]:
 > no

cd cmsblog
npm install
npm run dev
php artisan migrate

php artisan make:model Category -m
php artisan make:model Post -m
php artisan make:model Tag -m

Creación de tabla intermedia para relación muchos a muchos

php artisan make:migration create_post_tag_tablet (Tener presente que al crearlo debe tener un nombre ordenado alfabéticamente)

php artisan migrate
php artisan migrate:refresh

php artisan make:factory CategoryFactory
php artisan make:factory PostFactory
php artisan make:factory TagFactory

php artisan migrate:refresh --seed


php artisan make:controller Admin/TagController --resource
php artisan make:controller Admin/CategoryController --resource
php artisan make:controller Admin/PostController --resource


php artisan r:l --name=admin.categories
php artisan r:l --name=admin.tags 

php artisan make:request CategoryStoreRequest
php artisan make:request CategoryUpdateRequest
php artisan make:request TagStoreRequest
php artisan make:request TagUpdateRequest


php artisan make:policy PostPolicy

-------------------------------------

composer install
php artisan key:generate

php artisan migrate
o 
php artisan migrate:refresh --seed

php artisan storage:link 
-------------------------------------

composer dump-autoload

-------------------------------------
php artisan --version 
-------------------------------------

php artisan cache:clear
php artisan view:clear
php artisan route:cache
php artisan config:cache
php artisan optimize
-------------------------------------

php artisan vendor:publish --tag=laravel-errors

Copied Directory [\vendor\laravel\framework\src\Illuminate\Foundation\Exceptions\views] To [\resources\views\errors]

-------------------------------------
composer require haruncpi/laravel-simple-filemanager
php artisan filemanager:install

PS C:\xampp\htdocs\CMS-Blog-Laravel-8> php artisan filemanager:install
Copied Directory [\vendor\haruncpi\laravel-simple-filemanager\config] To [\config]
Publishing complete.
config published
Copied Directory [\vendor\haruncpi\laravel-simple-filemanager\assets] To [\public\filemanager]
Publishing complete.
assets published
Copied Directory [\vendor\haruncpi\laravel-simple-filemanager\migrations] To [\database\migrations]
Publishing complete.
migration published
Nothing to migrate.
PS C:\xampp\htdocs\CMS-Blog-Laravel-8> 


@FilemanagerScript
</head>
-------------------------------------

PS C:\xampp\htdocs\CMS-Blog-Laravel-8> php artisan livewire:publish

Copied Directory [\vendor\livewire\livewire\dist] To [\public\vendor\livewire]
Publishing complete.
Copied File [\vendor\livewire\livewire\config\livewire.php] To [\config\livewire.php]
Publishing complete.
Copied Directory [\vendor\livewire\livewire\src\views\pagination] To [\resources\views\vendor\livewire]
Publishing complete.
-------------------------------------


php artisan vendor:publish --tag=jetstream-views

PS C:\xampp\htdocs\CMS-Blog-Laravel-8> php artisan vendor:publish --tag=jetstream-views
Copied Directory [\vendor\laravel\jetstream\resources\views] To [\resources\views\vendor\jetstream]
Publishing complete.
-------------------------------------
Application Logo
After installing Jetstream, you may have noticed that the Jetstream logo is utilized on Jetstream's authentication pages as well as your application's top navigation bar. You may easily customize the logo by modifying a few Jetstream components.

#Livewire
If you are using the Livewire stack, you should first publish the Livewire stack's Blade components:

php artisan vendor:publish --tag=jetstream-views
Next, you should customize the SVGs located in the
resources/views/vendor/jetstream/components/application-logo.blade.php,
resources/views/vendor/jetstream/components/authentication-card-logo.blade.php, and 
resources/views/vendor/jetstream/components/application-mark.blade.php components.

Luego copie esos componentes dentro de views y elimine el prefijo -jet en las plantillas blade para llamar a los components copiados en views, no estoy usando los components \resources\views\vendor\jetstream creados con php artisan vendor:publish --tag=jetstream-views , los cuales pueden ser sobreescritos si se usa el comando php artisan vendor:publish --force eliminando los cambios de logo, estilos, etc

-------------------------------------
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
