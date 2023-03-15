<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\BrandController;
use \App\Http\Controllers\ContactController;
use \App\Http\Controllers\RegisterController;
use \App\Http\Controllers\LoginController;
use \App\Http\Controllers\CartController;
use \App\Http\Controllers\OrderController;
use \App\Http\Controllers\AdminController;
use \App\Http\Middleware\AuthMiddleware;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/products', [ProductController::class, 'index'])->name('products');

Route::get('/products/{parentId}', [CategoryController::class, 'show'])->name('displaySubcategories');

Route::get('/products/{route}/{subId}', [ProductController::class, 'get'])->name('productsByCategory');

Route::get('/single-product/{route}/{id}', [ProductController::class, 'showSingleProduct'])->name('singleProduct');

Route::get('/brands', [BrandController::class, 'index'])->name('brands');

Route::get('/brands/{brandId}', [BrandController::class, 'singleBrand'])->name('singleBrand');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::post('/contact', [ContactController::class, 'sendMessage'])->name('sendMessage');

Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::post('/register', [RegisterController::class, 'registerUser'])->name('doRegister');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'loginUser'])->name('doLogin');

Route::get("/logout", [LoginController::class, "logout"])->name("logout");

Route::get("/cart", [CartController::class, "index"])->name("cart");

Route::post("/cart", [CartController::class, "putInCart"])->name('doCart');

Route::delete("/cart/{id}", [CartController::class, "remove"])->name('cartItemRemove');

Route::get("/order", [OrderController::class, "index"])->name('order');

Route::post("/order", [OrderController::class, "order"])->name('doOrder');

Route::get("/author", [HomeController::class, "author"])->name('author');

Route::middleware([AuthMiddleware::class])->group(function () {
    Route::get("/admin", [AdminController::class, "index"])->name('admin');

    Route::get("/admin/products", [AdminController::class, "adminProducts"])->name('adminProducts');
    Route::get("/insert-products", [AdminController::class, "show"])->name('insertProductShow');
    Route::post("/insert-products", [AdminController::class, "insertProduct"])->name('insertProduct');
    Route::delete("/delete-products/{id}", [AdminController::class, "deleteProduct"])->name('deleteProduct');
    Route::delete("/delete-message/{id}", [AdminController::class, "deleteMsg"])->name('deleteMsg');

    Route::get("/user/edit/{id}", [AdminController::class, "userEdit"])->name('userEdit');
    Route::post("/user/edit/{id}", [AdminController::class, "doUserEdit"])->name('doUserEdit');
    Route::get("/orders/{id?}", [AdminController::class, "getOrders"])->name('showOrders');
});






