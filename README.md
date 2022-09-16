## Task Management App using 

- The app is using Laravel 8

### Purpose of project.
- Learning Laravel

### features of app
- CRUD (CREATE, READ, UPDATE and DELETE operation)
- Simple app where to create task which shows title and description.
- The task can edit and delete.

## Bootstrap Auth in Laravel

install 
```code
install 
composer require laravel/ui
php artisan ui bootstrap --auth
npm install
npm run dev
```

laravel-notify 
```code
$ composer require mckenziearts/laravel-notify
```
add service provider to config/app.php

```code
'providers' => [
    ...
    Mckenziearts\Notify\LaravelNotifyServiceProvider::class
    ...
];
```
Publish the configuration file and assets by running:
```code
$ php artisan vendor:publish --provider="Mckenziearts\Notify\LaravelNotifyServiceProvider"
```
Now that we have published a few new files to our application we need to reload them with the following command:
```code
$ composer dump-autoload
```
- Add styles links with @notifyCss
- Add scripts links with @notifyJs
- use notify() helper function inside your controller to set a toast notification for info, success, warning or error
- Include notify partial to your master layout @include('notify::components.notify')
## If you are on Laravel 7 or greater, you can use the tag syntax.
```code
<x:notify-messages />
@include('notify::components.notify')
```


![Task Management](public/uploads/task-management.png)