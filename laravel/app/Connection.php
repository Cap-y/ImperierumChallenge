<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $table = 'connections';


    public function users(){
        return $this->belongsToMany('App\User', 'users_connections');
    }


}
