<?php

use App\Http\Controllers\User\PostController;
use Illuminate\Support\Facades\Route;

//Route::prefix('user')->as('user.')->middleware(['auth', 'active'])->group(function () {
Route::prefix('user')->as('user.')->group(function () {
    Route::redirect('/', '/user/posts')->name('user');

    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show')->whereNumber('post');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post}', [PostController::class, 'delete'])->name('posts.delete');
    Route::put('/posts/{post}/like', [PostController::class, 'like'])->name('posts.like');

});
