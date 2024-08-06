<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get(); // Fetch all products
        return view('products.index', compact('products')); // Pass the data to the view
    }

    public function create()
    {
        return 'A form to create a product from controller';
    }

    public function store(Request $request)
    {
        // Code to handle storing a new product
    }

    public function show($productId)
    {
        $product = DB::table('products')->where('id', $productId)->first(); // Fetch the product by ID
        return view('products.show', compact('product')); // Pass the data to the view
    }

    // Add a method for editing products if needed
    public function edit($productId)
    {
        $product = DB::table('products')->where('id', $productId)->first(); // Fetch the product by ID
        return view('products.edit', compact('product')); // Pass the data to the view
    }

    public function update(Request $request, $productId)
    {
        // Code to handle updating a product
    }

    public function destroy($productId)
    {
        // Code to handle deleting a product
    }
}
