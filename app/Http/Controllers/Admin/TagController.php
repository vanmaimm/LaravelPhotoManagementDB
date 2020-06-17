<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    function index(){
        $tags=Tag::all();
        return view("admin.tag.tag", ["tags"=>$tags]);
    }
    function create(){
        return view("admin.tag.create");
    }
    function store(Request $request){
        $name= $request->name;
        $tag= new Tag;
        $tag->name=$name;
        $tag->save();
        return redirect("/admin/tag");
    }
    function edit($id){
        $tag=Tag::find($id);
        return view("admin.tag.edit",["tag"=>$tag]);
    }
    function update($id, Request $request){
        $name= $request->name;
        $tag= Tag::find($id);
        $tag->name=$name;
        $tag->save();
        return redirect("/admin/tag");
    }
}
