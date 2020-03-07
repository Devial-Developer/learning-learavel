<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileImage extends Model
{
    protected $table = 'file_images';
    protected $fillable = ['name', 'file'];

    public static function fileQuery($req)
    {
        $filename = $req->file('file');
        $filePath = $filename->getClientOriginalName();
        $filename->move(public_path('/upload'), $filePath);

        $sql = Self::create([
            'name' => $req->input('username'),
            'file' => $filePath,

        ]);
        return $sql->save();
    }

    public static function fetchData()
    {
        return Self::all();

    }

    public static function deleteImg($id)
    {
        return Self::find($id)->delete();
    }

    //Edit images

    public static function editfiles($req)
    {
        return Self::where('id', $req)->first();
    }

    public static function updateFile($request)
    {
        $name = $request->input('username');
        $id = $request->input('id');
        $filename = $request->file('file');
        $filePath = $filename->getClientOriginalName();
        $filename->move(public_path('/upload'), $filePath);
        return Self::where('id', $id)->update(['name' => $name, 'file' => $filePath]);
    }
}
