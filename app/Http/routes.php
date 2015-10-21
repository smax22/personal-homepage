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
	'uses' => 'PostController@getSnippets',
	'as' => 'home'
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

Route::get('/post/edit/{postId}', [
	'uses' => 'PostController@getEdit',
	'as' => 'post.edit',
	'middleware' => 'auth'
]);

Route::post('/post/edit', [
	'uses' => 'PostController@postEdit',
	'as' => 'post.update',
	'middleware' => 'auth'
]);

Route::get('/post/delete/{postId}', [
	'uses' => 'PostController@getDelete',
	'as' => 'post.delete',
	'middleware' => 'auth'
]);

Route::get('/post/showAll', [
	'uses' => 'PostController@getShowAll',
	'as' => 'post.showAll',
	'middleware' => 'auth'
]);

Route::get('/post/publish/{postId}/{publishState}', [
	'uses' => 'PostController@getPublish',
	'as' => 'post.publish',
	'middleware' => 'auth'
]);

