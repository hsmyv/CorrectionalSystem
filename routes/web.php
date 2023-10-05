<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('web.home');
});

Route::get('/about', function () {
    return view('web.about');
});

Route::get('/contact', function () {
    return view('web.contact');
});

Route::get('/service', function () {
    return view('web.service');
});
