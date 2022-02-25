<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Product;

class ProductController extends Controller
{
    public function products() {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create() {
        return view('admin.products.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'shipping' => '',
            'stock' => 'required',
            'description' => 'required',
            'subcategory_id' => 'required',
        ]);
        
        $product = new Product();
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->shipping = $request->get('shipping');
        $product->stock = $request->get('stock');
        $product->description = $request->get('description');
        $product->user_id = Auth::id();
        $product->save();
    }
}
