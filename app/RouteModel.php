<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RouteModel extends Model
{
    protected $table = "routes";
    protected $fillable = ['route_name', 'route_url'];

    public static function insetData($Route_name, $Route_url)
    {
        Self::updateOrInsert([
            'route_name' => $Route_url,
        ],
            ['route_name' => $Route_url,
                'route_url' => $Route_name,
            ]);
    }

}
