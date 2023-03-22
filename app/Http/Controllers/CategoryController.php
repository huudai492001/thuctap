<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::get();
        return view('admin.category.index', compact('categories'));
    }
    public function create(){
        $categories  = Category::get();
        return view('admin.category.addCategory', compact('categories'));
    }
    public function store(Request $request){
        $data = array(
          'name' => $request->name,
          'category_id' => $request->category_id,
        );
        $create = Category::create($data);
        return redirect()->route('category.create');
    }
    public function edit(Request $request, Category $category){
        $id = $request->id;
        $category = Category::find($id);
        $categories = Category::where('category_id')->get();
        return view('admin.category.editCategory', compact('category', 'categories'));
    }
    public function update(Request $request){
        $id = $request->id;
        $data = array(
          'name' => $request->name,
          'category_id' => $request->category_id,
        );
//        dd($data)
        $category = Category::find($id);
        $category->update($data);
        return redirect()->back()->with('success', 'Update category complete');
    }
    public function destroy(Request $request ,Category $category)
    {
        $id = $request->id;
        $category= Category::find($id);
//        return response()->json('success');
        $category->delete();
        return redirect()->back()->with('success', 'Delete category complete');




    }

}
