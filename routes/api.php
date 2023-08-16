<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts', [PostController::class, 'index'])->name('post.index');
Route::get('/posts/{post_slug}', [PostController::class, 'single'])->name('post.single');
Route::get('/posts/category/{category_id}', [PostController::class, 'category'])->name('post.category');

Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
