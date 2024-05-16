<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/about/{param?}', function () {
    return view('welcome');
});


Route::get('/',"AppController@functiom-name");
