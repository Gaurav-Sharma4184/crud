<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\PartyController;
use Illuminate\Support\Facades\Route;

// Route::get('/welcome', function () {
//     return view('welcome');
// });


Route::get('/',"App\Http\Controllers\AppController@index")->name('dashboard');

//Party routes
Route::get('/add-party',"App\Http\Controllers\PartyController@addParty")->name('add-party');
Route::post('/create-party',"App\Http\Controllers\PartyController@createParty")->name('create-party');
Route::get('/manage-parties',"App\Http\Controllers\PartyController@index")->name('manage-parties');
Route::get('/edit-party/{id}',"App\Http\Controllers\PartyController@editParty")->name('edit-party');
Route::put('/update-party/{id}',"App\Http\Controllers\PartyController@updateParty")->name('update-party');
Route::delete('/delete-party/{party}',"App\Http\Controllers\PartyController@deleteParty")->name('delete-party');


//Gst Bill Routes
Route::get('/add-gst-bill',"App\Http\Controllers\GstBillController@addGstBill")->name('add-gst-bill');
Route::get('/manage-gst-bills',"App\Http\Controllers\GstBillController@index")->name('manage-gst-bills');
Route::get('/print-gst-bill',"App\Http\Controllers\GstBillController@print")->name('print-gst-bill');
Route::post('/create-gst-bill',"App\Http\Controllers\GstBillController@createGstBill")->name('create-gst-bill');

// Route::get('/dashboard',  [AppController::class, 'index']);  
// Route::get('/edit-party/{id}',  [PartyController::class, 'editparty'])->name('edit-party');z
