<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Photo;
use App\category;
use App\Tag;
use App\PhotoDescription;
use App\Taggable;
use Illuminate\Support\Facades\Input;

class PhotoController extends Controller
{
    function index(){
        $photos=Photo::all();
        foreach ($photos as $photo){
            $photo->category;
            $photo->tagmm;
            $photo->description;
        }
        // echo "<pre>" . json_encode($photos, JSON_PRETTY_PRINT). "</pre>";
        return view("admin.photo.photo",["photos"=>$photos] );
    }
    function create(){
        $categories=Category::all();
        $tags=Tag::all();
        return view("admin.photo.insert",["categories"=>$categories,"tags"=>$tags]);
    }
    function store(Request $request){
        $name=$request->name;
        $category= $request->category;
        $image = $request->file("image")->store("public");
        $tags=$request->tags;
        $input['tags'] = implode(',', $tags);
        $description=$request->description;

        $photo = new Photo;
        $photo->title=$name;
        $photo->image=$image;
        $photo->category_id=$category;
        $photo->save();
        
        $desc=  new Photodescription;
        $desc->photo_id=$photo->id;
        $desc->content=$description;
        $desc->save();

        for($i=0;$i<count($tags);$i++){
            $tg= new Taggable;
            $tg->tag_id=$tags[$i];
            $tg->photo_id=$photo->id;
            $tg->save();
        }
    }
}
