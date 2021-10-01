<?php

use App\Http\Controllers\Admin\Blog\CategoryController;
use App\Http\Controllers\Admin\Blog\PostController;
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

Route::group(['middleware' => ['auth:sanctum', 'verified'], 'prefix' => 'admin'], function () {
    Route::view('dashboard', 'welcome')->name('dashboard');

    Route::group(['prefix' => 'blog'], function () {
        Route::resource('categories', CategoryController::class);
        Route::resource('posts', PostController::class);
    });
});
