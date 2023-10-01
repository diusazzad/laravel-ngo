<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\ProjectController;

Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create')->middleware('can:create,App\Models\Project');
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store')->middleware('can:create,App\Models\Project');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show')->middleware('can:view,project');
Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit')->middleware('can:update,project');
Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('projects.update')->middleware('can:update,project');
Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy')->middleware('can:delete,project');
