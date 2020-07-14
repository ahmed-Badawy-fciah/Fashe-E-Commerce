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
Route::get('/blog/{id}', 'BlogController@show');
Route::get('/product/{id}', 'ProductController@show');
Route::get('/cart', 'ViewsController@cart');
Route::get('/product', 'ViewsController@product');
Route::get('/myprofile', 'ViewsController@profile');


Route::prefix('admin')->group(function () {
    Route::resource('blog', 'BlogController')->only([
        'index','store' , 'update', 'destroy'
    ]);
    Route::resource('tag', 'TagController')->only([
        'index','store', 'show' , 'update', 'destroy'
    ]);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('locale/{locale}' , function($locale){
    if (! in_array($locale, ['en', 'ar'])) {
        abort(404);
    }
    Session::Put('locale',$locale);
    return redirect()->back();
});