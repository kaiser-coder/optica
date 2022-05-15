<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\front\PagesController;
use App\Http\Controllers\back\ProductsController;
use App\Http\Controllers\back\ContactsController;
use App\Http\Controllers\back\CategoriesController;
use App\Http\Controllers\back\UsersController;

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

Route::get('/', [PagesController::class, 'index'])->name('homepage');

Route::prefix('admin')->group(function() {
    Route::get('login', [UsersController::class, 'index'])->name('login');
    Route::post('auth', [UsersController::class, 'auth'])->name('auth');
    Route::get('logout', [UsersController::class, 'logout'])->name('logout');

    Route::middleware('auth:sanctum')->group(function () {
        Route::prefix('products')->group(function() {
            Route::get('', [ProductsController::class, 'index'])->name('products.list');
            Route::get('create', [ProductsController::class, 'create'])->name('products.create');
            Route::post('', [ProductsController::class, 'store'])->name('products.store');
        });

        Route::prefix('contacts')->group(function() {
            Route::post('', [ContactsController::class, 'store'])->name('contacts.store');
            Route::get('', [ContactsController::class, 'index'])->name('contacts.list');
        });

        Route::prefix('categories')->group(function() {
            Route::get('', [CategoriesController::class, 'index'])->name('categories.list');
            Route::get('create', [CategoriesController::class, 'create'])->name('categories.create');
            Route::post('', [CategoriesController::class, 'store'])->name('categories.store');
        });
    });
});
