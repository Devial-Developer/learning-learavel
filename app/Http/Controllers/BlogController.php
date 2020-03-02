<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * page show in browser
     */

    public function getBlog()
    {
        return view('blog');

    }

    /***
     * insert data in database
     */

    public function getdatablog(Request $req)
    {
        Blog::blogModel($req);
        return redirect()->back();
    }

    /**
     * get all data from the database
     *
     * @return void
     */
    public function getbloglist()
    {
        $test = Blog::all();
        return view('blog_list', ['test' => $test]);

    }

    /***
     * Delete data to the button in blog list
     *
     * * */

    public function deleteblog($id)
    {
        Blog::find($id)->delete();
        return redirect()->back();
    }

    /****
     * edit blog-list
     */

    public function editBlogDone($edit)
    {
        $update = Blog::editBlogmodel($edit);
        return view('blog_edit', ['update' => $update]);
    }

}
