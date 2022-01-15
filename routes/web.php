<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
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

Route::get('/', [PostController::class, 'index'])->name('index');
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('showDetail');
Route::post('/logout', [SessionController::class, 'logout'])->name('logout');

Route::middleware('roleModel')->group(function () {
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('editPost');
    Route::patch('/posts/{post}', [PostController::class, 'update'])->name('updatePost');
    Route::delete('/posts/{post}', [PostController::class, 'delete'])->name('deletePost');
});

Route::middleware('auth')->group(function () {
    //auth
    Route::get('/create', [PostController::class, 'create'])->name('createPost');
    Route::post('/create', [PostController::class, 'storePost'])->name('updatePost');
    //Comment
    Route::post('/posts/{post:slug}/comment', [CommentController::class, 'storeComment'])->name('storeComment');
    //logout
});

Route::middleware('guest')->group(function () {
    //Guest!
    //Register
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('storeRegister');
    //login
    Route::get('/login', [SessionController::class, 'create'])->name('login');
    Route::post('/login', [SessionController::class, 'store'])->name('storeLogin');
});

Route::middleware('admin')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('adminIndex');
    Route::delete('/admin/{post}/delete', [AdminController::class, 'destroy'])->name('deleteAdminPost');
});
