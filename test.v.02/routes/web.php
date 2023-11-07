<?php

use App\Http\Controllers\admin\dashboard;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('layout.app');
// });
Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->group(function () {
    Route::get('/dashboard',[dashboard::class,'index'])->name('admin.index');
    Route::get('/dashboard',[dashboard::class,'payment_history'])->name('admin.payment');

    Route::get('/loan/plans',[dashboard::class,'loan_plan'])->name('loan.plans');
    Route::get('/loan/active',[dashboard::class,'loan_active'])->name('loan.active');
    Route::get('/loan/pending',[dashboard::class,'loan_pending'])->name('loan.pending');
    Route::get('/loan/paid',[dashboard::class,'loan_paid'])->name('loan.paid');
    Route::get('/loan/close',[dashboard::class,'loan_closed'])->name('loan.close');
    Route::get('/loan/all',[dashboard::class,'loan_all'])->name('loan.all');

    Route::get('/saving/active',[dashboard::class,'saving_active'])->name('saving.active');
    Route::get('/saving/pending',[dashboard::class,'saving_pending'])->name('saving.pending');
});
