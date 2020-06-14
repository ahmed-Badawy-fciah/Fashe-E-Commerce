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


Route::get('/', 'ViewsController@index');
Route::get('/about', 'ViewsController@about');
Route::get('/contact', 'ViewsController@contact');
Route::get('/blog', 'ViewsController@blog');
Route::get('/cart', 'ViewsController@cart');
Route::get('/product', 'ViewsController@product');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');