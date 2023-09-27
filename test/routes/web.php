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


Route::get('/admin/socity', [AdminController::class, 'socityIndex'])->name('admin.socityIndex');

// Route::get('/admin/member', [AdminController::class, 'memberIndex'])->name('admin.member');
// Route::get('/admin/member/create', [AdminController::class, 'memberCreate'])->name('admin.member.create');
// Route::post('/admin/member', [AdminController::class, 'member'])->name('admin.member.store');
// Route::get('/admin/member/{member}/edit', [AdminController::class, 'member'])->name('admin.member.edit');
// Route::put('/admin/member/{member}', [AdminController::class, 'member'])->name('admin.member.update');
// Route::get('/admin/member/{member', [AdminController::class, 'member'])->name('admin.member.destroy');

Route::get('/admin/loanapply', [AdminController::class, 'loadApply'])->name('admin.loan');

Route::get('/admin/loancollection', [AdminController::class, 'loanCollection'])->name('admin.collection');

Route::get('/admin/sharecollection', [AdminController::class, 'shareCollection'])->name('admin.sharecollection');

Route::get('/admin/denytoapprove', [AdminController::class, 'denytoApprove'])->name('admin.denytoapprove');
