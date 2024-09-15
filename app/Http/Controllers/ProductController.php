<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        
        $products = [
            (object) ['name' => 'Product 1', 'description' => 'Description for Product 1', 'price' => 100],
            (object) ['name' => 'Product 2', 'description' => 'Description for Product 2', 'price' => 200],
        ];

       
        return view('products', ['products' => $products]);
    }
}

