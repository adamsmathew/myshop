<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Home route
Route::get('/', function () {
    return view('welcome');
})->name('main');

// Index route for listing products
Route::get('products', [ProductController::class, 'index'])->name('products.index');

// Route for creating a new product
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');

// Route for storing a new product
Route::post('products', [ProductController::class, 'store'])->name('products.store');

// Route for showing a specific product
Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');

// Route for editing a specific product
Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

// Route for updating a specific product
Route::match(['put', 'patch'], 'products/{product}', [ProductController::class, 'update'])->name('products.update');

// Route for deleting a specific product
Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
