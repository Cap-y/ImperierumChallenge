<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    protected $fillable = ['firstname','lastname','alias','city'];
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
<<<<<<< HEAD
<<<<<<< HEAD
    
=======
>>>>>>> 08c8cbeb2b7b296e4d910507a6b9aa14de94b210
=======
    
>>>>>>> tilo14

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function challenges(){
        return $this->belongsToMany('App\Challenge', 'users_challenges');
    }
    public function results(){
        return $this->belongsToMany('App\Result', 'users_challenges_results');
    }
    public function connections(){
        return $this->belongsToMany('App\Connection', 'users_connections');
    }

}
