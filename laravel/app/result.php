<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $table = 'results';


    public function users(){
        return $this->belongsToMany('App\User', 'users_challenges_results');
    }
    public function challenges(){
        return $this->belongsToMany('App\Challenge', 'users_challenges_results');
    }

}
