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

Route::get('/', function () {
	if(Auth::check())
	{
		return redirect()->intended('home');
	}
	else
	{
		return view('index');
	}
});

Route::get('feature','VoterController@feature');
Route::get('voter-registration','VoterController@voterRegForm');
Route::post('voter-register','VoterController@voterRegister');
Route::get('login','VoterController@voterLoginForm');
Route::post('login','VoterController@voterLogin');
Route::get('home','VoterController@voterHome');
Route::get('logout','VoterController@logout');
Route::get('voter-list','VoterController@voterList');
Route::get('election-status','VoterController@electionStatus');
Route::post('vote','VoterController@vote');
Route::group(['middleware'=>'auth'],function()
{
	Route::get('home','VoterController@voterHome');
	Route::get('logout','VoterController@logout');
});
