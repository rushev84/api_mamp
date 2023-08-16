<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'enter'])->name('login.enter');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');

Route::middleware('auth')->group(function () {
    Route::get('/admin/posts', [AdminController::class, 'posts'])->name('admin.posts');
});
