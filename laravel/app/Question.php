<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Question extends Model
{
    protected $table = 'questions';

    public function challenges(){
    	return $this->belongsToMany('App\Challenge', 'challenges_questions');
    }

    public function options(){
    	return $this->hasMany('App\Option', 'questions_options');
    }
	
}
