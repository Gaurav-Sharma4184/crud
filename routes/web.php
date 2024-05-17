<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about/{param?}',"App\Http\Controllers\AppController@about" );


// Route::get('/contact',"AppController@functiom-name")->name('contact');
// Route::get('/about',"AppController@index");
Route::get('/welcome',  [AppController::class, 'index']);
