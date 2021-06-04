<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\Products\ProductController;
use \App\Http\Controllers\Admin\Users\UserController;
use \App\Http\Controllers\Products\DisplayProductController;
use \App\Http\Controllers\Media\MediaController;

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
    return redirect()->route('login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {
    Route::group(['prefix' => '/admin'], function() {
        Route::group(['prefix' => '/products'], function() {
            Route::get('/', [ProductController::class, 'index'])->name('admin.products');
            Route::get('/store', [ProductController::class, 'store'])->name('admin.products.store');
            Route::get('/{id}', [ProductController::class, 'show'])->name('admin.products.show');
            Route::get('/{id}/update', [ProductController::class, 'update'])->name('admin.products.update');
        });
        Route::group(['prefix' => '/users'], function() {
            Route::get('/', [UserController::class, 'index'])->name('admin.users');
            Route::get('/store', [UserController::class, 'store'])->name('admin.users.store');
            Route::get('/{id}', [UserController::class, 'show'])->name('admin.users.show');
            Route::get('/{id}/update', [UserController::class, 'update'])->name('admin.users.update');
        });
    });
    Route::group(['prefix' => '/products'], function() {
        Route::get('/', [DisplayProductController::class, 'index'])->name('products');
        Route::get('/{id}', [DisplayProductController::class, 'show'])->name('products.show');
    });
    Route::group(['prefix' => '/media'], function() {
        Route::get('/{id}', [MediaController::class, 'show'])->name('media.show');
    });
});
