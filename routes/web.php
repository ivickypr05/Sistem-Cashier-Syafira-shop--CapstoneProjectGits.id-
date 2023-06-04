<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransactionController;

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

Route::get('/', function () {
    return view('profile');
});

// Authentication -----------------------------------------------------------------------------------
Auth::routes();

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

// route admin
Route::middleware(['auth', 'admin'])->group(function () {
    // Admin --------------------------------------------------------------------------------------------
    Route::get('/admin', [AdminController::class, 'index']);

    // CRUD Category
    Route::get('/category', [CategoryController::class, 'index']);
    // Add Category
    Route::get('/category/add', [CategoryController::class, 'create']);
    Route::post('/category', [CategoryController::class, 'store']);
    // Edit Category
    Route::get('/category/{id}/edit', [CategoryController::class, 'edit']);
    Route::put('/category/{id}', [CategoryController::class, 'update']);
    // Delete Category
    Route::get('/category/{id}/delete', [CategoryController::class, 'destroy']);

    // CRUD Product
    Route::get('/product', [ProductController::class, 'index'])->name('product');
    // Add Product
    Route::get('/product/add', [ProductController::class, 'create']);
    Route::post('/product', [ProductController::class, 'store']);
    // Edit Product
    Route::get('/product/{id}/edit', [ProductController::class, 'edit']);
    Route::put('/product/{id}', [ProductController::class, 'update']);
    //Delete Product
    Route::get('/product/{id}/delete', [ProductController::class, 'destroy']);

    // CRUD Supplier
    Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier');
    // Add Product
    Route::get('/supplier/add', [SupplierController::class, 'create']);
    Route::post('/supplier', [SupplierController::class, 'store']);
    // Edit Supplier
    Route::get('/supplier/{id}/edit', [SupplierController::class, 'edit']);
    Route::put('/supplier/{id}', [SupplierController::class, 'update']);
});

Route::middleware(['auth', 'cashier'])->group(function () {
    // Cashier --------------------------------------------------------------------------------------------
    // Products
    Route::get('/cashier', [CashierController::class, 'index'])->name('cashier');
    // products Search
    Route::get('/product/search', [CashierController::class, 'search']);
    // Carts
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::post('/addtocart/{id}', [CartController::class, 'addtocart']);
    Route::put('/cart/{id}/edit', [CartController::class, 'update']);
    Route::get('/cart/{id}/delete', [CartController::class, 'destroy']);
    // Transactions
    Route::get('/transaction', [TransactionController::class, 'index'])->name('Transaction');
    //Checkout payment
    Route::post('/checkout', [CartController::class, 'getpayment']);
});
