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

Route::get('/register', [
	'uses' => 'AUth\AuthController@getRegisterForm'
]);

Route::post('/register/new', [
	'uses' => 'AUth\AuthController@create',
	'as'   => 'create-user'
]);

Route::get('/eloquent/id', [
	'uses' => 'EloquentController@eloquentDisplayIdToString'
]);

Route::get('/eloquent/lastname', [
	'uses' => 'EloquentController@eloquentDisplaylastName'
]);

Route::get('/eloquent/firstname', [
	'uses' => 'EloquentController@eloquentDisplayfirstName'
]);

Route::get('/eloquent/fullname', [
	'uses' => 'EloquentController@eloquentDisplayfullName'
]);
