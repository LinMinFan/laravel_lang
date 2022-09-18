<?php

use Illuminate\Routing\Router;
use Illuminate\Http\Request;

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
    $router->get('/website/pages',function(){
        return view('admin::website.pages');
    });
    $router->get('/website/articles',function(){
        return view('admin::website.articles');
    });
    $router->get('/website/article_types',function(){
        return view('admin::website.article_types');
    });
    $router->get('/website/images',function(){
        return view('admin::website.images');
    });
});
