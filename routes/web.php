<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile/{user_id}',[\App\Http\Controllers\UserController::class,'index']);
Route::get('/article',[\App\Http\Controllers\ArticleController::class,'index'])->name('article.index');
Route::post('/article/store',[\App\Http\Controllers\ArticleController::class,'store'])->name('article.store');
Route::get('/article/create',[\App\Http\Controllers\ArticleController::class,'create'])->name('article.create');


