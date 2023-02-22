<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    //
    public function index()
    {
        $data = 'Hello Robust';
        $data2 = 'Hello Juga';
        $product = Product::get();
        return view('dashboard', compact('data', 'data2', 'product'));
    }
}
