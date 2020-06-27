<?php

use Illuminate\Http\Request;

Route::apiResource('/blog' , 'APIs\BlogController');
Route::apiResource('/reply' , 'APIs\ReplyController');
Route::apiResource('/tag' , 'APIs\TagController');
Route::apiResource('/product' , 'APIs\ProductController');