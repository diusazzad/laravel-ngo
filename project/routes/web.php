<?php

use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\NgoController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name('home');



Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/admin', [TestController::class, 'admin']);
Route::resource('/admin/members', MemberController::class);

// Route::get('/ngos', [NgoController::class, 'index'])->name('ngos.index');
// Route::get('/ngos/create', [NgoController::class, 'create'])->name('ngos.create');
Route::get('/loanindex', [TestController::class, 'showLoanCalculationForm'])->name('loanCalculation');
Route::get('/loancreate', [TestController::class, 'loanCalculation'])->name('loancalculation');







Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Routes for the admin role
Route::middleware(['role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    // Other admin routes...
});

// Routes for the user role
Route::middleware(['role:user'])->group(function () {
    Route::get('/user', [UserController::class, 'index'])->name('user.dashboard');
    // Other user routes...
});
