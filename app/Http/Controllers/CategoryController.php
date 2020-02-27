<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function Category()
    {
        return view('category');
    }

    //select data
    public function CaregoryCode(Request $req)
    {
        Category::categoryModel($req);
        return redirect()->route('showCategory');
    }
    //fetch data
    public function showCategory()
    {
        $users = Category::all();
        return view('caregory_list', ['users' => $users]);
    }

    //delete category
    public function delete_category($id)
    {
        Category::find($id)->delete();
        return back();
    }

}
