<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin.admin');
})->name('admin');


Route::get('/admin/socity', [AdminController::class, 'society'])->name('admin.socity');
Route::get('/admin/member', [AdminController::class, 'member'])->name('admin.member');
Route::get('/admin/loanapply', [AdminController::class, 'loadApply'])->name('admin.loan');
Route::get('/admin/loancollection', [AdminController::class, 'loanCollection'])->name('admin.collection');
Route::get('/admin/sharecollection', [AdminController::class, 'shareCollection'])->name('admin.sharecollection');
Route::get('/admin/denytoapprove', [AdminController::class, 'denytoApprove'])->name('admin.denytoapprove');
