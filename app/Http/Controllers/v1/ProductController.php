<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function store(Request $request){
        $validate = Validator::make($request->all(),[
            'category_id' => 'required|integer|exists:categories,id',
            'name' => 'required|string',
            'price' => 'required|decimal',
            'stock' => 'required|integer',
            'image' => 'required|nullable|image|mime:jpg,png,jpeg|max:2048'
        ]); 
    }
}
