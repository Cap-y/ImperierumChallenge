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

<<<<<<< HEAD
=======
    protected $fillable = ['firstname','lastname','alias','city'];
>>>>>>> 32a113bd541bf428d50dcc2e5582edfe0d3cdff4
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
    protected $fillable = ['name', 'email', 'password'];

=======
>>>>>>> 32a113bd541bf428d50dcc2e5582edfe0d3cdff4
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
<<<<<<< HEAD
=======

    public function challenges(){
        return $this->belongsToMany('App\Challenge', 'users_challenges');
    }
    public function results(){
        return $this->belongsToMany('App\Result', 'users_challenges_results');
    }
    public function connections(){
        return $this->belongsToMany('App\Connection', 'users_connections');
    }

>>>>>>> 32a113bd541bf428d50dcc2e5582edfe0d3cdff4
}
