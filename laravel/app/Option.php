<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $table = 'options';
<<<<<<< HEAD

    public function questions(){
    	return $this->belongsToMany('App\Question', 'questions_options');
    }
=======
>>>>>>> tilo14
}
