<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;   

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
        $validate = Validator::make($request->all(),[
            'name' => "required|string|max:30|unique:categories,name"
        ]);
        Category::create([
            'name' => $request->name
        ]);
        return redirect()->route('index.get');
    }
}
