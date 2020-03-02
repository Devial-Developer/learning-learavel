<?php

namespace App\Http\Middleware;

use App\RouteModel;
use Closure;
use Illuminate\Support\Facades\Route;

class InsertRoute
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $Route_url = url()->current();
        $Route_name = Route::currentRouteName();

        RouteModel::insetData($Route_url, $Route_name);
        return $next($request);
    }
}
