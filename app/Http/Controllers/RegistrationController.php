<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function index(Request $request)
    {

        $res = User::ins($request);
        return $res;

    }

    public function registrationCode()
    {
        return view('register');

        echo "welcome to Registration";

    }

    public function login()
    {
        return view('login');
    }

    //fetch data

    public function loginCode(Request $req)
    {

        $valid = array('email' => $req->email, 'password' => $req->pswd);

        // $req->session()->put('user',$req->input('email'));

        if (Auth::attempt($valid)) {

            return view('dashboard');

        } else {
            echo "error reporting";
        }
    }

}
