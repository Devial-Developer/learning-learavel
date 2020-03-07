<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddUser extends Model
{
       protected $table='add_users';
       protected $fillable=['email','age','password'];


/**-----Insert Data into Database----**/

       public static function insertData($require){
       	   $name=Self::create([

               
                 'email'=> $require->email,
                 'age'=> $require->Age,
                  'password'=> $require->password,

       	   ]);

       	   return $name->save();

       }
}
