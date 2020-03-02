<?php

namespace App\Http\Controllers;

use App\User;

class CounController extends Controller
{
    public function dashboardName()
    {
        $userCount = User::count();
        return view('dashboard', ['userCount' => $userCount]);

        // return view('dashboard');

    }
}
