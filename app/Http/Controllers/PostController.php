<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //post home page..
    public function FunctionNamePost()
    {
        return view('post');
    }

    //select data..
    public function postCode(Request $req)
    {
        Post::postMethod($req);

        return redirect()->route('showPost');
    }

    //    fetch data
    public function showPost()
    {
        $student = Post::all();
        return view('post_list', ['student' => $student]);

    }

    // this code only for the retrive data into madatray and optional
    public function getCategory($type)
    {

        $categories = Category::getCategoryByType($type);

        return response()->json(['categories' => $categories]);

    }

    public function editPost($id)
    {

        return view('post');
    }

    //delete post
    public function delete($id)
    {
        $record = Post::find($id);
        $record->delete();
        return back();

    }

}
