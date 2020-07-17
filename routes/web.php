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
Route::get('/about', 'ViewsController@about')->middleware('auth');
Route::get('/contact', 'ViewsController@contact');
Route::get('/blog', 'ViewsController@blog');
Route::get('/blog/{id}', 'BlogController@show');
Route::get('/product/{id}', 'ProductController@show');
Route::get('/cart', 'ViewsController@cart');
Route::get('/product', 'ViewsController@product');
Route::get('/myprofile', 'ViewsController@profile');

// The Middlewaaare check if the user has logged in and also if he has an allowed role to see the dashboard
Route::group(['prefix' => 'admin', 'middleware'=> ['auth', 'checkrole:admin,blogger,manager,moderator']],function () {
    Route::get('/', function(){
        return view('admin.dashboard');
    })->middleware('checkrole:admin,blogger,moderator');
    
    Route::apiresource('customer', 'CustomerController');
    Route::apiresource('order', 'OrderController');
    Route::apiresource('review', 'ReviewController');

    // Check if he is a blogger
    Route::group(['middleware' => 'checkrole:blogger'], function(){
        Route::resource('blog', 'BlogController')->only([
            'index','store' , 'update', 'destroy'
        ])->middleware('checkrole:blogger,admin');
        Route::resource('tag', 'TagController')->only([
            'index','store', 'show' , 'update', 'destroy'
        ]);
        Route::apiresource('reply', 'ReplyController');    
    });
    
    Route::apiresource('employee', 'EmployeeController');
    
    Route::apiresource('category', 'CategoryController');
    Route::apiresource('product', 'ProductController');
    Route::apiresource('size', 'SizeController');
    Route::apiresource('color', 'ColorController');

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