<?php

use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Route::post('/role', [RoleController::class, 'createRole']);
// Route::post('/permission', [RoleController::class, 'createPermission']);
// Route::post('/assign-permission/{role}/{permission}', [RoleController::class, 'assignPermissionToRole']);
// Route::get('/users/{role}', [RoleController::class, 'getUsersWithRole']);
// Route::get('/user/{user}/permissions', [RoleController::class, 'getUserPermissions']);
// Route::get('/user/{user}/check-permission/{permission}', [RoleController::class, 'checkUserPermission']);


Route::group(['middleware' => ['role:administrator']], function () {
    // Admin routes
});

Route::post('/articles/create', function () {
    // Create article logic
})->middleware(['permission:create articles']);

Route::get('/articles/{article}/edit', function (App\Models\Article $article) {
    // Edit article logic
})->middleware(['owns:article']);
