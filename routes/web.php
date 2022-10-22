<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// the whole app will run under the prefix of dashboard! except auth
Route::middleware('auth')->prefix('dashboard')->group(function() {

    Route::get('/', [AppController::class, 'dashboard'])->name('dashboard');
});

Route::post('/auth/logout', [AppController::class, 'logout']);