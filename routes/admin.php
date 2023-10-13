<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::group(['middleware' => 'api', 'prefix' => 'auth'], function ($router) {
    Route::post('/register', [AdminController::class, 'register']);
    Route::post('/login',   [AdminController::class, 'login']);
});

Route::get('pages/{page}', [PageController::class, 'get']);
Route::post('pages/{page}', [PageController::class, 'post']);


Route::get('/index', [AdminController::class, 'index'])->name("index");
Route::get('/home', [HomeController::class, 'index'])->name("home.index");
