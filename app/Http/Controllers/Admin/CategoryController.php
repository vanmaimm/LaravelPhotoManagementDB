<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Photo;

class CategoryController extends Controller
{
    function index(){
        $categories=Category::all();
        return view("admin.category.category", ["categories"=>$categories]);
    }
    function create(){
        return view("admin.category.create");
    }
    function store(Request $request){
        $name= $request->name;
        $category= new Category;
        $category->name=$name;
        $category->save();
        return redirect("/admin/category");
    }
    function edit($id){
        $category=Category::find($id);
        return view("admin.category.edit",["category"=>$category]);
    }
    function update($id, Request $request){
        $name= $request->name;
        $category= Category::find($id);
        $category->name=$name;
        $category->save();
        return redirect("/admin/category");
    }
    function destroy($id){
        Photo::where('category_id',$id)->delete();
        Category::find($id)->delete();
         return redirect('/admin/category');
     }
}
