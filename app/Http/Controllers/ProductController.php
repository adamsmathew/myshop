<?php

namespace App\Http\Controllers;
use App\Models\Product;
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
        
        return view ('products.create');
    }

    public function store(Request $request)
    {
        // dd(request(), request()->title,request()->all());

        //array -

        // $product = Product::create([
        //     'title' =>request()->title,
        //     'description' =>request()->description,
        //     'price' =>request()->price,
        //     'stock' =>request()->stock,
        //     'status' =>request()->status,
        // ]);

        $product = Product::create(request()->all());
        return $product;

    }

    public function show($productId)
    {
        $product = DB::table('products')->where('id', $productId)->first(); // Fetch the product by ID
        return view('products.show', compact('product')); // Pass the data to the view
    }

    // Add a method for editing products if needed
    public function edit($product)
    {
       
        return view('products.edit')->with([
            'product' =>Product::findOrFail($product)
        ]);
    }

    public function update($product)
    {
        $product = Product::findOrFail($product);

        $product->update(request()->all());
        return $product;
    }

    public function destroy($product)
    {
        $product = Product::findOrFail($product);

        $product->delete();
        return $product;
    }
}
