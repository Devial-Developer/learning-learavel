<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   
      protected $table = 'posts';
        protected $fillable = [
        'title', 'discription','category_id',
    ];



      public static function postMethod($req){

                   $catomode=Self::create([
                   	 'title'=>$req->title,
                   	 'discription'=> $req->Discription,
                   	 'category_id'=> $req->category_select,
                   ]);
                    
                return $catomode;


      

    }
}
