<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class CategoryController extends Controller
{
    public function add(){
        return view('admin.category.create');
    }

    public function store(Request $request,Category $category){
        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;
        $category ->save();
        Toastr::success('Department Created', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();

    }

    public function edit(){
        $categories = Category::all();
        return view('admin.category.index',compact('categories'));
    }

    public function updateview($id){
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
    }


    public function update(Request $request, $id){
        $category = Category::find($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        Toastr::success('Department Updated', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    public function destroy($id){
        $category = Category::find($id);
        $category->delete();
        Toastr::warning('Department Removed', '', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
       }

}
