<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'IndexController@home')->name('home');

Route::get('category/{category}', 'CategoriesController@show')->name('category.show');
Route::get('article/{article}', 'ArticlesController@show')->name('article.show');
Route::get('search/{keyword}', 'ArticlesController@search')->name('article.search');
Route::get('tag/{tag}', 'ArticlesController@tag')->name('article.tag');
Route::patch('/article/{article}', 'ArticlesController@star');

Route::post('uploadImage', 'IndexController@uploadImage')->name('uploadImage');

