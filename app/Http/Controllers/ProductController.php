<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    //
    public function index()
    {
        // $product = Product::with('category')->get();
        $product = Product::get();

        $category = Category::all();

        return view('pages.products.index', compact('product', 'category'));
    }

    public function create()
    {
        $category = Category::all();

        return view('pages.products.create', compact('category'));
    }

    public function store(ProductRequest $request)
    {
        Product::create($request->all());
        session()->flash('status', 'Task was successful!');
        return To_route('product.index');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('pages.products.edit', compact('product'));
    }

    public function update(ProductRequest $request, $id)
    {
        $product = Product::find($id);
        session()->flash('status', 'Task was successful!');
        $product->update($request->all());

        return redirect()->intended('/product');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        session()->flash('status', 'Task was successful!');
        $product->delete();
        return redirect()->intended('/product');


    }
}
