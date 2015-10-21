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

Route::get('/', [
	'as' => 'home', 
	function () {
    	return view('home');
	}
]);


/*
	Admin login, logout & dashboard
*/

Route::get('/admin/index', [
	'uses' => 'AdminController@getIndex',
	'as' => 'admin.index',
	'middleware' => 'auth'
]);

Route::get('/admin/login', [
	'uses' => 'AdminController@getLogin',
	'as' => 'admin.login',
	'middleware' => 'guest'
]);

Route::post('/admin/login', [
	'uses' => 'AdminController@postLogin',
	'as' => 'admin.login',
	'middleware' => 'guest'
]);

Route::get('/admin/logout', [
	'uses' => 'AdminController@getLogout',
	'as' => 'admin.logout',
	'middleware' => 'auth'
]);

/*
	Posts
*/

Route::get('/post/create', [
	'uses' => 'PostController@getCreate',
	'as' => 'post.create',
	'middleware' => 'auth'
]);

Route::post('/post/create', [
	'uses' => 'PostController@postCreate',
	'as' => 'post.create',
	'middleware' => 'auth'
]);
