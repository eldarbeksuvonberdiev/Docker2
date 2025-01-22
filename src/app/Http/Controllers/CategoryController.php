<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('category-index', compact('categories'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required'
        ]);

        Category::create($data);
        return redirect()->route('category');
    }

    public function edit(Category $category)
    {
        return view('edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $data = $request->validate([
            'name' => 'required'
        ]);

        $category->update($data);

        return redirect()->route('category');
    }

    public function destroy(Request $request, Category $category)
    {
        $category->delete();

        return back();
    }
}
