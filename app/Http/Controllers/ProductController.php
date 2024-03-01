<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productStore(){
        $producto = new Product();
        $producto->name = "hello";
        $producto->price = 3400.3;
        return $producto;
    }
}
