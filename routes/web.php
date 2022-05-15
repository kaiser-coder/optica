<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\front\PagesController;
use App\Http\Controllers\back\ProductsController;
use App\Http\Controllers\back\ContactsController;

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
    Route::prefix('products')->group(function() {
        Route::get('', [ProductsController::class, 'index'])->name('products.list');
        Route::get('create', [ProductsController::class, 'create'])->name('products.create');
        Route::post('', [ProductsController::class, 'store'])->name('products.store');
    });

    Route::prefix('contacts')->group(function() {
        Route::post('', [ContactsController::class, 'store'])->name('contacts.store');
        Route::get('', [ContactsController::class, 'index'])->name('contacts.list');
    });
});
