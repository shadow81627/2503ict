<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return Redirect::to(url("product"));
});

Route::resource('product', 'ProductController'); 

Route::post('user/login', array('as' => 'user.login', 'uses' => 'UserController@login')); 
Route::get('user/logout', array('as' => 'user.logout', 'uses' => 'UserController@logout')); 
Route::resource('user', 'UserController'); 
