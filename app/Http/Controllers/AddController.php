<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddUser;

class AddController extends Controller
{
     public function addForm(){
     	return view ('add_form');
     }

     //Insert data into database 

     public function saveData(Request $require){

     	 AddUser::insertData($require);
     	 echo "<script>alert('save data succeessfully');</script>";
     	 // return view('add_form');

     }

}
