<?php

use App\Http\Controllers\admin\dashboard;
use App\Http\Controllers\loanController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\savingController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('layout.app');
// });
Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->group(function () {

    Route::controller(dashboard::class)->group(function(){
        Route::get('/dashboard',[dashboard::class,'index'])->name('admin.index');
        Route::get('/dashboard',[dashboard::class,'payment_history'])->name('admin.payment');
    });

    // loan Section
    Route::controller(loanController::class)->group(function () {
        //all routes for loans
        Route::get('/loan/plans','loanPlan')->name('loan.plans');
        Route::get('/loan/active','loanActive')->name('loan.active');
        Route::get('/loan/pending','loanPending')->name('loan.pending');
        Route::get('/loan/paid','loanPaid')->name('loan.paid');
        Route::get('/loan/close','loanClosed')->name('loan.close');
        Route::get('/loan/all','loanAll')->name('loan.all');

      
    });

    Route::controller(savingController::class)->group(function () {

        Route::get('/saving/plan','savingPlan')->name('saving.plan');
        Route::get('/saving/pending','savingPending')->name('saving.pending');
        Route::get('/saving/active','savingActive')->name('saving.active');
        Route::get('/saving/paid','savingPaid')->name('saving.paid');
        Route::get('/saving/paid','savingClose')->name('saving.close');
        Route::get('/saving/all','savingAll')->name('saving.all');

    });

    Route::controller(paymentController::class)->group(function () {
        Route::get('/payment/all','paymentAll')->name('payment.all');
        Route::get('/payment/loan','paymentLoan')->name('payment.loan');
        Route::get('/payment/saving','paymentSaving')->name('payment.saving');
    });

});
