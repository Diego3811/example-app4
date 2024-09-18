<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; 


class ProductController extends Controller
{
    public function index()
    {
        
        $products = [
            (object) ['name' => 'Product_1', 'description' => 'Description_for_Product 1', 'price' => 100],
            (object) ['name' => 'Product_2', 'description' => 'Description_for_Product 2', 'price' => 200],
        ];

       
        return view('products', ['products' => $products]);
    }
}

