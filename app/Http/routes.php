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
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function() {
	Route::get('pd', 'PdController@index');
	Route::get('pd/create', 'PdController@create');
	Route::post('pd', 'PdController@store');
	Route::get('pd/{pd}','PdController@show');
	Route::get('pd/{pd}/matched', 'PdController@matched');
	Route::get('pd/{pd}/sender_confirm/{receiverId}', 'PdController@senderConfirm');
	Route::get('gd/create', 'GdController@create');
});

Route::auth();

Route::get('/home', 'HomeController@index');
