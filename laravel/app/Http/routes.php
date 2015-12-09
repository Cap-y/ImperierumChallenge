<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::resource('users', 'UserController');
Route::resource('challenges', 'ChallengeController');



/*
Route::get('/users', 'UserController@index');
Route::get('/users', 'UserController@index');


Route::get('/welcome', function () {
    return view('welcome');
});

*/
