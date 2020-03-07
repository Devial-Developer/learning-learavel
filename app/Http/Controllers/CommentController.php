<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    /**
     * comment box
     */

    public function viewComment()
    {
        return view('comment');
    }

    /***
     * insert data in database
     */

    public function getCommentblog(Request $req)
    {
        Comment::commentModel($req);
        return redirect('blog_list');
    }

    public function getAllCommentData()
    {

    }

}
