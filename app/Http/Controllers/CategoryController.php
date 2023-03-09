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

        return view('pages.category.index', compact('category', 'product'));
    }

    public function create()
    {
        $category = Category::all();
        return view('pages.category.create', compact('category'));
    }

    public function store(Request $request)
    {
        Category::create($request->all());
        session()->flash('status', 'Task was successful!');
        return redirect()->intended('/category');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('pages.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->update($request->all());

        return redirect()->intended('/category');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->intended('/category');


    }
}
