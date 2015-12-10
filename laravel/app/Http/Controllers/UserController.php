<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User as User;
<<<<<<< HEAD:laravel/app/Http/Controllers/UserController.php
use Illuminate\Http\JsonResponse;
=======
>>>>>>> tilo14:laravel/app/Http/Controllers/userController.php

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

<<<<<<< HEAD:laravel/app/Http/Controllers/UserController.php
        $users = User::all();
        return $users->toJson();

=======
>>>>>>> tilo14:laravel/app/Http/Controllers/userController.php
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;

        $user->firstname = 'Billy';
        $user->lastname = 'Bong';
        $user->alias = 'Någon';
        $user->city = 'Långtbortistan';
        $user->profilepic = 'nope';
        $user->secrecy = '1';

        $user->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
<<<<<<< HEAD:laravel/app/Http/Controllers/UserController.php

        $user = User::find($id);
        $uservalues = array(
            $user->firstname,
            $user->lastname,
            $user->alias,
            $user->city,
            $user->profilepic
            );
        $jsondata = json_encode($uservalues);
        return $jsondata; 
    
=======
        $user = User::find($id);
        $uservalues = array(
            $user->firstname,
            $user->lastname,
            $user->alias,
            $user->city
            );
        $uservalues.toJson();
        

>>>>>>> tilo14:laravel/app/Http/Controllers/userController.php
}
    /*
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
