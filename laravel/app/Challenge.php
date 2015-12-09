<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model{
	 protected $table = 'challenges';

	public function users(){
        return $this->belongsToMany('App\User', 'users_challenges');
    }
    public function result(){
    	return $this->belongsToMany('App\Result', 'users_challenges_results');
    }
	
}
