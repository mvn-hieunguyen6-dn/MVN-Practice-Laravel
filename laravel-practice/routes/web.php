<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\UserController;
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
    return view('home');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// USERS
Route::get('/users/index', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('user.create');
Route::post('/users/store', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
Route::get('/users/{id}/comments', [App\Http\Controllers\UserController::class, 'show'])->name('user.show');
Route::get('/users/{id}', [App\Http\Controllers\UserController::class, 'detail'])->name('user.detail');
Route::get('/search', 'SearchController@search')->name('web.search');

// POSTS
Route::get('/posts/{id}/shows', [App\Http\Controllers\PostController::class, 'show'])->name('post.show');

//COMMENTS
Route::get('/comments/index', [App\Http\Controllers\CommentController::class, 'index'])->name('comments.index');
Route::get('/comments/{id}/users', [App\Http\Controllers\CommentController::class, 'show'])->name('comments.users');
