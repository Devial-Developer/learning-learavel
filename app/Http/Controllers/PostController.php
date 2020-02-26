<?php

namespace App\Http\Controllers;
use DB;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
	    public function FunctionNamePost()
	    {
	        return view('post');
	    }

       //select data

    	 public function postCode(Request $req){

			   Post::postMethod($req); 

    	 	  // return redirect()->route('showPost');
    	 }

    	// fetch data

    	 // function showPost(){
    	 //       $student=Post::all();
      //         return view('post_list',['student'=>$student]);
      //     }

    	function categoryType($type){
    		return DB::table('categories')->select('category_name')->where('category_type','=',$type)->get();
    		
    	}


}
