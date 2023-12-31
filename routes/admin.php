<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\QaController;
use App\Http\Controllers\Admin\ServiceController;

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

Route::resource('/posts', BlogController::class);
Route::resource('/services', ServiceController::class);

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function ($router) {
    Route::post('/register', [AdminController::class, 'register']);
    Route::post('/login',   [AdminController::class, 'login']);
});

Route::get('pages/{page}', [PageController::class, 'get']);
Route::post('pages/{page}', [PageController::class, 'post']);


Route::get('/index', [AdminController::class, 'index'])->name("index");
Route::get('/home', [HomeController::class, 'home_page'])->name("home.index");
Route::post('/home', [HomeController::class, 'home_page_store'])->name("home.store");
Route::get('/blog', [BlogController::class, 'blog_page'])->name("blog.index");
Route::post('/blog', [BlogController::class, 'blog_page_store'])->name("blog.store");
Route::post('/store-tags', [BlogController::class, 'tag_store'])->name("blog.tag.store");
Route::get('/service', [ServiceController::class, 'service_page'])->name("service.index");
Route::post('/service', [ServiceController::class, 'service_page_store'])->name("service.store");
Route::get('/about', [AboutController::class, 'about_page'])->name("about.index");
Route::post('/about', [AboutController::class, 'about_page_store'])->name("about.store");
Route::get('/qa', [QaController::class, 'qa_page'])->name("qa.index");
Route::get('/contact', [ContactController::class, 'contact_page'])->name("contact.index");
Route::post('/contact', [ContactController::class, 'contact_page_store'])->name("contact.store");
