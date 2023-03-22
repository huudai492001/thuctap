<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::get();
        return view('admin.product.addProduct', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = array(
            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price,
        );
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = date('dmY') . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path("/upload"), $fileName);
            $data['image'] = $fileName;
        }
//        dd($data);
        $create = Product::create($data);
//        return redirect()->route('product.create');
        return redirect()->back()->with('success', 'Product add success');
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $product = Product::find($id);
        $categories = Category::get();
        return view('admin.product.editProduct', compact( 'product', 'categories'));
    }

    public function update(Request $request)
    {
        $data = array(
            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price,
        );
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = date('dmY') . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path("/upload"), $fileName);
            $data['image'] = $fileName;
        }
        dd($data);
    }
}
