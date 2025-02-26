<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
// ********************index******************************
Route::get('/', function () {
    return view('pages.index');
});
// ********************shop******************************
Route::get('/shop', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show'])->name('products.details');
Route::get('/shop-details', function () {
    return view('pages.shop.shop-details');
});
// ********************blog******************************
Route::get('/blog', function () {
    return view('pages.blog.blog');
});
Route::get('/blog-details', function () {
    return view('pages.blog.blog-details');
});
// ********************contact******************************
Route::get('/contact', function () {
    return view('pages.contact');
});
// ********************shopping-cart******************************
Route::get('/shopping-cart', function () {
    return view('pages.shoping.shopping-cart');
});
Route::get('/checkout', function () {
    return view('pages.shoping.checkout');
});
