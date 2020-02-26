<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    /***
    table name
     **/
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'Father', 'email', 'password', 'date', 'mobile',
    ];

    // *
    //  * The attributes that should be hidden for arrays.
    //  *
    //  * @var array

    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    public static function ins($request)
    {

       $res= Self::create([
            'name' => $request->Name,
            'Father' => $request->Father,
            'email' => $request->email,
            'password' => bcrypt($request->pswd),
            'date' => $request->date,
            'mobile' => $request->MobileNo,
        ]);

             return $res;
    }

}
