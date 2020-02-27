<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'category_name', 'category_type',
    ];

    public static function categoryModel($req)
    {
        $cato = Self::create([
            'category_name' => $req->Caregory,
            'category_type' => $req->category_select,
        ]);

        return $cato;
    }

    public static function getCategoryByType($catregoryType)
    {
        $query = Self::where(['category_type' => $catregoryType])->select('id', 'category_name')->get();
        return $query;
    }

}
