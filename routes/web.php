<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category/{cat}', [ProductController::class, 'showCategory'])->name('showCategory');
Route::get('/category/{cat}/{product_id}', [ProductController::class, 'show'])->name('showProduct');
Route::get('/cart', [CartController::class, 'index'])->name('cartIndex');
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('addToCart');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
