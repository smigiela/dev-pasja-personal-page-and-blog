<?php

use App\Http\Controllers\Admin\Blog\CategoryController;
use App\Http\Controllers\Admin\Blog\PostController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::group(['prefix' => 'blog'], function() {
   Route::get('', [BlogController::class, 'index'])->name('blog.index');
   Route::get('/kategoria/{category}', [BlogController::class, 'showCategory'])->name('blog.category');
   Route::get('/{post}', [BlogController::class, 'showPost'])->name('blog.post');
});

Route::group(['middleware' => ['auth:sanctum', 'verified'], 'prefix' => 'admin'], function () {
    Route::view('dashboard', 'welcome')->name('dashboard');

    Route::group(['prefix' => 'blog'], function () {
        Route::resource('categories', CategoryController::class);
        Route::resource('posts', PostController::class);
    });
});
