<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Photo;

class PhotoController extends Controller
{
    function index(){
        $photos=Photo::all();
        foreach ($photos as $photo){
            $photo->category;
            $photo->tagmm;
            $photo->description;
        }
        echo "<pre>".json_encode($photos,JSON_PRETTY_PRINT)."</pre>";
    }
}
