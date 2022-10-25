<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// the whole app will run under the prefix of dashboard! except auth
Route::middleware('auth')->prefix('dashboard')->group(function() {

    Route::get('/', [AppController::class, 'dashboard'])->name('dashboard');
    Route::prefix('users')->group(function() {
        Route::get('/', [UserController::class, 'all_user'])->name('users.index');
        Route::get('/{id}', [UserController::class, 'one_user'])->name('users.show');
    });
    Route::prefix('clients')->group(function() {
        Route::get('/', [UserController::class, 'all_client'])->name('clients.index');
        Route::get('/{id}', [UserController::class, 'one_client'])->name('clients.show');
    });
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
});

Route::get('/', function() {
    return redirect('/dashboard');
});

Route::post('/auth/logout', [AppController::class, 'logout']);