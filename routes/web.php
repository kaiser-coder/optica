<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\front\PagesController;
use App\Http\Controllers\back\ProductsController;

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

Route::get('/welcome', [PagesController::class, 'index']);
Route::get('/products', [ProductsController::class, 'index']);
