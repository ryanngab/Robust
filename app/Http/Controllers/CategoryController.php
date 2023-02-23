<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $category = Category::all();
        $product = Product::all();

        return view('category.index', compact('category', 'product'));
    }
}
