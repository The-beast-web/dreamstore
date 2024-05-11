<?php

use App\Http\Controllers\Website\AccountController;
use App\Http\Controllers\Website\CartController;
use App\Http\Controllers\Website\CategoryController;
use App\Http\Controllers\Website\CheckoutController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\ProductController;
use App\Http\Controllers\Website\SearchController;
use App\Http\Controllers\Website\ShopController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::name('website.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    // Product Category Routes
    Route::prefix('/product-categories')->name('category.')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/category', [CategoryController::class, 'detail'])->name('detail');
    });
    // Shop Routes
    Route::prefix('/shop')->name('shop.')->group(function () {
        Route::get('/', [ShopController::class, 'index'])->name('index');
        Route::get('/shop-tag', [ShopController::class, 'detail'])->name('detail');
    });
    // Product Routes
    Route::prefix('/product')->name('product')->group(function () {
        Route::get('/product-name', [ProductController::class, 'index'])->name('.main');
    });

    // Account Routes
    Route::prefix('/my-account')->name('account')->group(function () {
        Route::get('/', [AccountController::class, 'index'])->name('.dashboard');
    });

    // Cart Route
    Route::get('/cart', [CartController::class, 'index'])->name('cart');

    // Checkout Route
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');

    // Search Route
    Route::get('/search', [SearchController::class, 'search'])->name('search');
});
