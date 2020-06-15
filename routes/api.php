<?php

use Illuminate\Http\Request;

Route::apiResource('/blog' , 'APIs\BlogController');
Route::apiResource('/reply' , 'APIs\replyController');