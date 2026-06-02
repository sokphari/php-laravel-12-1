<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create(){
        return view('categories.create');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name' => "required|string|max:30|unique:categories,name"
        ]);

        Category::create([
            'name' => $validated['name']
        ]);

        return redirect()->route('suppliers.index');
    }
}
