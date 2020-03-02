<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $fillable = ['file_name', 'file'];

/***
 * Insert data
 */

    public static function blogModel($req)
    {
        $blogvalue = Self::create([
            'file_name' => $req->filename,
            'file' => $req->file,
        ]);

        return $blogvalue->save();
    }

    /****
     * edit data
     *
     */

    public static function editBlogmodel($edit)
    {
        self::where('id', $edit)->first();
    }

}
