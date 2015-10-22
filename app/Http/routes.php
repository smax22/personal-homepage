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

Route::get('/post/show/{postId}/{postURL}', [
	'uses' => 'PostController@getShow',
	'as' => 'post.show'
]);

/*
	Products
*/

Route::get('/product/index', [
	'uses' => 'ProductController@getIndex',
	'as' => 'product.index'
]);

Route::get('/product/create', [
	'uses' => 'ProductController@getCreate',
	'as' => 'product.create',
	'middleware' => 'auth'
]);

Route::post('/product/create', [
	'uses' => 'ProductController@postCreate',
	'as' => 'product.create',
	'middleware' => 'auth'
]);

Route::get('/product/showAll', [
	'uses' => 'ProductController@getShowAll',
	'as' => 'product.showAll',
	'middleware' => 'auth'
]);

Route::get('/product/edit/{productId}', [
	'uses' => 'ProductController@getEdit',
	'as' => 'product.edit',
	'middleware' => 'auth'
]);

Route::get('/product/delete/{productId}', [
	'uses' => 'ProductController@getDelete',
	'as' => 'product.delete',
	'middleware' => 'auth'
]);

Route::post('/product/edit/', [
	'uses' => 'ProductController@postEdit',
	'as' => 'product.update',
	'middleware' => 'auth'
]);

/*
	References
*/

Route::get('/reference/index', [
	'uses' => 'ReferenceController@getIndex',
	'as' => 'reference.index'
]);

Route::get('/reference/create', [
	'uses' => 'ReferenceController@getCreate',
	'as' => 'reference.create',
	'middleware' => 'auth'
]);

Route::post('/reference/create', [
	'uses' => 'ReferenceController@postCreate',
	'as' => 'reference.create',
	'middleware' => 'auth'
]);

Route::get('/reference/showAll', [
	'uses' => 'ReferenceController@getShowAll',
	'as' => 'reference.showAll',
	'middleware' => 'auth'
]);

Route::get('/reference/edit/{referenceId}', [
	'uses' => 'ReferenceController@getEdit',
	'as' => 'reference.edit',
	'middleware' => 'auth'
]);

Route::get('/reference/delete/{referenceId}', [
	'uses' => 'ReferenceController@getDelete',
	'as' => 'reference.delete',
	'middleware' => 'auth'
]);

Route::post('/reference/edit/', [
	'uses' => 'ReferenceController@postEdit',
	'as' => 'reference.update',
	'middleware' => 'auth'
]);

/*
	Comments
*/

Route::post('/post/comment/create', [
	'uses' => 'CommentController@postCreate',
	'as' => 'comment.create',
]);

/*
	Contact
*/

Route::get('/contact', [
	'uses' => 'ContactController@getIndex',
	'as' => 'contact.index'
]);

