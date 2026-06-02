<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(){
        $products = Product::latest()->paginate(5);
        return view('products.index',compact('products'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }
    public function edit($id){
        $product = Product::FindOrfail($id);
        $categories = Category::all();
        return view('products.edit',compact('product', 'categories'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|integer|exists:categories,id',
            'name' => 'required|string|max:40',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|image|max:2048',
            'desc'  => 'nullable|string'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products','public');
            $validated['image'] = $imagePath;
        }

        Product::create($validated);

        return redirect()->back()->with('success', 'Product created successfully.');
    }
    public function destroy($id){
        $product = Product::findOrFail($id);
        if ($product->image && Storage::disk('public')->exists($product->image)) {
        Storage::disk('public')->delete($product->image);
        }
        $product->delete();
        return to_route('products.index');
    }
    public function update(Request $request,int $id){
        $validated = $request->validate([
            'category_id' => 'required|integer|exists:categories,id',
            'name' => 'required|string|max:40',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|image|max:2048',
            'desc'  => 'nullable|string',
        ]);
        $product = Product::findOrFail($id);

        if ($request->hasFile('image')) {
            if($product->image && Storage::disk('public')->exists($product->image)){
                Storage::disk('public')->delete($product->image);
            }

            $imagePath = $request->file('image')->store('products','public');
            $validated['image'] = $imagePath;
        }

        $product->update($validated);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }
}
