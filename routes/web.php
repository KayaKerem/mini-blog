<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
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

Route::get('/profile/{user_id}',[UserController::class,'index']);
Route::get('/article/create',[ArticleController::class,'create'])->name('article.create');
Route::get('/article/{article}',[ArticleController::class,'show'])->name('article.show');
Route::get('/article',[ArticleController::class,'index'])->name('article.index');
Route::post('/article/store',[ArticleController::class,'store'])->name('article.store');

Route::get('/category/create',[CategoryController::class,'create'])->name('categories.create');
Route::post('/category/store',[CategoryController::class,'store'])->name('categories.store');
Route::get('/category/{category_name}',[CategoryController::class,'index',request('name')])->name('categories.index');



