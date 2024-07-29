<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('subcategory')->get();
        return view('admin.pages.products.index', compact('products'));
    }

    public function create()
    {
        $subcategories = Subcategory::all();
        return view('admin.pages.products.create', compact('subcategories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'subcategory_id' => 'required|exists:subcategories,id',
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif',
            'price' => 'required|numeric',
            'old_price' => 'nullable|numeric',
            'sub_description' => 'nullable|string',
            'description' => 'nullable|string',
            'information' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products');
        }

        Product::create($data);

        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        return view('admin.pages.products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $subcategories = Subcategory::all();
        return view('admin.pages.products.edit', compact('product', 'subcategories'));
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'subcategory_id' => 'required|exists:subcategories,id',
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif',
            'price' => 'required|numeric',
            'old_price' => 'nullable|numeric',
            'sub_description' => 'nullable|string',
            'description' => 'nullable|string',
            'information' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products');
        }

        $product->update($data);

        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
