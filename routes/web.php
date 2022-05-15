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

Route::get('/home', [PagesController::class, 'index'])->name('homepage');

Route::prefix('admin')->group(function() {
    Route::get('/products', [ProductsController::class, 'index'])->name('products.list');
    Route::post('/contacts', [ContactsController::class, 'store'])->name('contacts.store');
    Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts.list');
});
