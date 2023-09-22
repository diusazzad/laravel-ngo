<?php

use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\NgoController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/admin', [TestController::class, 'admin']);
Route::resource('/admin/members', MemberController::class);

// Route::get('/ngos', [NgoController::class, 'index'])->name('ngos.index');
// Route::get('/ngos/create', [NgoController::class, 'create'])->name('ngos.create');
