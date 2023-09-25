<?php

use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\NgoController;
use App\Http\Controllers\SocityController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::middleware('web')->group(function () {
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);

    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



    // User routes
    Route::middleware(['auth', 'role:user'])->group(function () {
        // User Dashboard
        Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');

    });

    // Admin routes
    Route::middleware(['auth', 'role:admin'])->group(function () {
        // Admin Dashboard
        Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        // Socity
        Route::get('/admin/socity', [SocityController::class, 'socity'])->name('admin.socity');
    });

});
