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
        $filename = $req->file('file');
        $filePath = $filename->getClientOriginalName();
        $filename->move(public_path('/upload'), $filePath);

        $blogvalue = Self::create([
            'file_name' => $req->filename,
            'file' => $filePath,
        ]);

        return $blogvalue->save();
    }

    //get data
    public static function getBlogmodel()
    {
        return Self::all();

    }

    /****
     * edit data
     *
     */

    public static function editBlogmodel($edit)
    {
        return Self::where('id', $edit)->first();
    }

    /***
    upload file and edit
     */
    public static function updateBlogFile($request)
    {
        print_r($request->all());die;
        $name = $request->input('filename');
        $id = $request->input('id');
        $filename = $request->file('file');
        if ($request->file('file')) {
            $filePath = $filename->getClientOriginalName();
            $filename->move(public_path('/upload'), $filePath);

        }

        return Self::where('id', $id)->update(['file_name' => $name, 'file' => $filePath]);
    }
}
