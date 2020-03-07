<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['comment'];

    /***
     * Insert data
     */

    public static function commentModel($req)
    {
        $commentvalue = Self::create([

            'comment' => $req->comment,

        ]);

        return $commentvalue->save();
    }

}
