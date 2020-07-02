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
Route::get('/myprofile', 'ViewsController@profile');

Route::prefix('admin')->group(function () {
    Route::get('/', 'Admin\AdminController@dashboard');
    Route::get('/order', 'Admin\AdminController@orders');
    Route::get('/customer', 'Admin\AdminController@customers');
    Route::get('/review', 'Admin\AdminController@reviews');
    Route::get('blog', 'Admin\AdminController@blogs');
    Route::get('tag', 'Admin\AdminController@tags');
    Route::get('reply', 'Admin\AdminController@replies');
    Route::get('employee', 'Admin\AdminController@employees');
    Route::get('role', 'Admin\AdminController@roles');
    Route::get('permission', 'Admin\AdminController@permissions');
    Route::get('category', 'Admin\AdminController@categories');
    Route::get('product', 'Admin\AdminController@products');
    Route::get('size', 'Admin\AdminController@sizes');
    Route::get('color', 'Admin\AdminController@colors');
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