<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model{
	 protected $table = 'challenges';

	public function users(){
        return $this->belongsToMany('App\User', 'users_challenges');
    }
<<<<<<< HEAD
    public function results(){
    	return $this->belongsToMany('App\Result', 'users_challenges_results');
    }
    public function questions(){
    	return $this->hasMany('App\Question');
    }
=======
    public function result(){
    	return $this->belongsToMany('App\Result', 'users_challenges_results');
    }
>>>>>>> tilo14
	
}
