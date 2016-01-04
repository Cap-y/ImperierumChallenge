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
Route::get('/', function(){
	return View::make('index');
});


Route::resource('api/users', 'UserController');

Route::resource('api/questions', 'QuestionController');

Route::resource('api/challenges', 'ChallengeController');

Route::resource('api/flow', 'FlowController');


