<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Post\EditController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\CreateController;
use App\Http\Controllers\Post\UpdateController;
use App\Http\Controllers\Post\DestroyController;




Route::group(['namespace' => 'Post'], function(){
    Route::get( '/posts', [IndexController::class, '__invoke'] )->name('post.index');
    Route::get('/posts/create', [CreateController::class, '__invoke'])->name('post.create');

    Route::post('/posts', [StoreController::class, '__invoke'])->name('post.store');
    Route::get('/posts/{post}', [ShowController::class, '__invoke'])->name('post.show');
    Route::get('/posts/{post}/edit', [EditController::class, '__invoke'])->name('post.edit');
    Route::patch('/posts/{post}', [UpdateController::class, '__invoke'])->name('post.update');
    Route::delete('/posts/{post}', [DestroyController::class, '__invoke'])->name('post.delete');
});

Route::get( '/main', [MainController::class, 'index'] )->name('main.index');
Route::get( '/contacts', [ContactController::class, 'index'] )->name('contact.index');
Route::get( '/about', [AboutController::class, 'index'] )->name('about.index');