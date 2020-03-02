<?php

namespace App\Http\Controllers;

use App\Route;

class RouteController extends Controller
{
    public function getUrl()
    {
        Route::routeInsToDate();
    }
}
