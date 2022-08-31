<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\RefController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\Cart\CartPController;
use App\Http\Controllers\Cart\CheckoutController;
use App\Http\Controllers\Weather\WeatherController;
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

Route::get('/',[FrontController::class,'index']);
Route::get('contact', [FrontController::class,'contact']);
Route::put('contact-message', [FrontController::class,'send']);
Route::get('references', [FrontController::class,'reference']);

Route::get('/products/{name}', [FrontController::class,'products_cat']);
Route::get('/products-items/{name}',[FrontController::class,'products']);

Route::post('search', [FrontController::class,'search']);
Route::get('/product/{cat}/{name}',[FrontController::class,'product']);

Route::get('cart', [CartPController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartPController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartPController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartPController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartPController::class, 'clearAllCart'])->name('cart.clear');

// Route::put('search', [FrontController::class, 'search']);



Auth::routes();
Route::get('checkout', [CheckoutController::class, 'index'])->name('check.list');
Route::post('payment', [CartPController::class, 'addUser']);
Route::post('place-order', [CheckoutController::class, 'placeorder']);
Route::get('checkout-payment', [CheckoutController::class, 'index_pay']);
Route::put('payment-method', [CheckoutController::class, 'paymentmethod']);
Route::get('checkout-complete', [CheckoutController::class, 'index_comp']);

Route::put('catalogue', [FrontController::class, 'pdf']);

Route::get('myorders', [UserController::class, 'index']);
Route::get('view-order/{id}', [UserController::class, 'view']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', 'Admin\FrontendController@index');
    Route::get('categories', 'Admin\CategoryController@index');
    Route::post('insert-category', 'Admin\CategoryController@insert');
    Route::get('edit-cat/{id}', [CategoryController::class,'edit']);
    Route::put('update-category/{id}', [CategoryController::class,'update']);
    Route::get('delete-category/{id}', [CategoryController::class,'destroy']);
    
    Route::get('subcategory', 'Admin\TypeController@index');
    Route::post('insert-type', 'Admin\TypeController@insert');
    Route::get('edit-type/{id}', [TypeController::class,'edit']);
    Route::put('update-type/{id}', [TypeController::class,'update']);
    Route::get('delete-type/{id}', [TypeController::class,'destroy']);

    Route::get('products', [ProductController::class,'index']);
    Route::post('insert-product', [ProductController::class,'insert']);
    Route::get('edit-prd/{id}', [ProductController::class,'edit']);
    Route::get('delete-prd/{id}', [ProductController::class,'destroy']);
    Route::put('update-product/{id}',[ProductController::class,'update'] );
    
    Route::get('brands', 'Admin\BrandController@index');
    Route::post('insert-brand', 'Admin\BrandController@insert');
    Route::get('edit-brand/{id}', [BrandController::class,'edit']);
    Route::put('update-brand/{id}', [BrandController::class,'update']);
    Route::get('delete-brand/{id}', [BrandController::class,'destroy']);

    Route::get('reference', [RefController::class,'index']);
    Route::post('insert-reference', [RefController::class,'insert']);
    Route::get('edit-ref/{id}', [RefController::class,'edit']);
    Route::get('delete-ref/{id}', [RefController::class,'destroy']);
    Route::put('update-reference/{id}',[RefController::class,'update'] );

    Route::get('orders', [OrderController::class, 'index']);
    Route::get('admin/view-order/{id}', [OrderController::class, 'view']);
    Route::put('update-order/{id}', [OrderController::class, 'updateorder']);
    Route::get('order-history', [OrderController::class, 'orderhistory']);

    Route::get('users', [UsersController::class, 'index']);
    Route::get('edit-usr/{id}', [UsersController::class, 'edit']);
    Route::put('update-user/{id}', [UsersController::class, 'update']);
    Route::get('delete-usr/{id}', [UsersController::class, 'destroy']);



});


/* Weather */
Route::get('overview', [WeatherController::class,'index']);
Route::get('search', [WeatherController::class,'search']);