<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    //
    public function index()
    {
        $product = Product::get();

        $category = Category::all();

        return view('products.index', compact('product', 'category'));
    }
}
