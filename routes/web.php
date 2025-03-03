<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientsController;
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
// ********************Auth******************************
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login_trait',[AuthController::class,'login_trait'])->name('login.trait');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/ajoute_register',[AuthController::class,'ajoute_register'])->name('register.trait');

// ********************admin******************************
Route::middleware('auth')->group(function(){
Route::get('/admin', function () {
    return view('admin.pages.index');
});
// ********************clients******************************
Route::get('/clients', [ClientsController::class, 'index'])->name('clients');
Route::get('/clients-details', [ClientsController::class, 'details'])->name('clients.details');
Route::post('/admin/clients/add', [ClientsController::class, 'store'])->name('clients.store');
Route::delete('/admin/clients/{id}', [ClientsController::class, 'destroy'])->name('clients.destroy');

// ********************products******************************
Route::get('/products', function () {
    return view('admin.pages.products');
});
Route::get('/products-details', function () {
    return view('admin.pages.products-details');
});
});
