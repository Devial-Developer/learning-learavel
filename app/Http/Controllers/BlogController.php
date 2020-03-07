<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comment;
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
        $test = Blog::getBlogmodel();
        $comBlog = Comment::all();
        return view('blog_list', ['test' => $test, 'comBlog' => $comBlog]);
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

    public function editBlog(Request $request, $id)
    {
        $getDetails = Blog::find($id)->first();

        return view('blog_edit', ['details' => $getDetails]);
    }

    public function updateBlog(Request $request)
    {
        print_r($request->all());

        $name = $request->input('filename');
        $id = $request->input('id');
        $filename = $request->file('file');
        $filePath = $filename->getClientOriginalName();
        $filename->move(public_path('/upload'), $filePath);
        return Self::where('id', $id)->update(['file_name' => $name, 'file' => $filePath]);
    }
}
