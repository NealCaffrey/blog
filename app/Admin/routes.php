<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->resource('articles', ArticleController::class);
    $router->resource('categories', CategoryController::class);

    $router->get('/api/category', function (){
        $category = \App\Models\Category::all(['id', 'title as text']);
        return $category;
    });
});
