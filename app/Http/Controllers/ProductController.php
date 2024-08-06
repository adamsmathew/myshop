<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();

        // dd($products);

        return view('products.index');
    }
    public function create()
    {
        return 'A form to create a product from controller';
    }
    public function store()
    {
        //
    }
    public function show($products)
    {
        return view('products.show');
    }
}
