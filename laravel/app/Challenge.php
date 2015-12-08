<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model{
	 protected $table = 'challenges';

	public function users(){
        return $this->belongsToMany('App\User', 'user_challanges');
    }
	
}
