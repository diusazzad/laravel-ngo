<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('layout.app');
// });
Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->group(function () {

});
