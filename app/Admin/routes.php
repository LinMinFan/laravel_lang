<?php

use Illuminate\Routing\Router;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('users', UserController::class);
    $router->resource('pages', PagesController::class);
    $router->resource('lengths', LengthController::class);
    $router->resource('articles', ArticlesController::class);
    $router->resource('article_types', Article_typeController::class);
    $router->resource('counters', CounterController::class);
    $router->resource('counter_types', Counter_typeController::class);
    $router->resource('images', ImageController::class);
    $router->resource('/website/articles', WebsitearticlesController::class);
    $router->resource('/website/article_types', Websitearticle_typesController::class);
    $router->resource('/website/images', WebsiteimagesController::class);
    $router->resource('/website/pages', WebsitepagesController::class);

});
