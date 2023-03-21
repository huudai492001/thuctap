<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.index');
    }
    public function create(){
        return view('admin.category.addCategory');
    }
    public function store(Request $request){
        $data = array(
          'name' => $request->name,
          'category_id' => $request->category_id,
        );
        dd($data);
    }
}
