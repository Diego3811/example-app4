<?php

use App\Models\Product; // Asegúrate de importar el modelo Product

class ProductController extends Controller
{
    public function index()
    {
        // Obtener los productos desde la base de datos
        $products = Product::all();

        // Pasar los productos a la vista
        return view('products.index', compact('products'));
    }
}
