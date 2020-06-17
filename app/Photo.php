<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
   public function description(){
       return $this->hasOne("App\PhotoDescription", "photo_id");
   }
   public function Category(){
       return $this->belongsTo("App\Category","category_id", "id" );
   }
   public function Tagmm(){
       return $this->belongsToMany("App\Tag","taggables","tag_id", "photo_id" );
   }
   
}
