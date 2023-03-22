<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('admin.product.index');
    }
    public function store(Request $request){
        $data = array(
            'name'=> $request->name,
            'category_id'=> $request->category_id,
            'price'=>$request->price,
        );
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $fileName = date('dmY').time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path("/upload"), $fileName);
            $data['image'] = $fileName;
        }
        $create = Product::create($data);
//        return redirect()->route('product.create');
        return redirect()->back()->with('success' , 'Product add success');
    }
}
