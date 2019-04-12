<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
<<<<<<< HEAD
=======
    public function user(){
        return $this->hasOne('App\User');
    }
>>>>>>> a0b58d69ea6a576a39781c3e7ed18ac8a88a86ce
}
