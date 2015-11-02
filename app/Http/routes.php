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
    return view('blog.index');
});

Route::get('/single', function() {
    return view('blog.single');
});

Route::get('/web-development', function() {
    return view('webdev.index');
});

Route::get('/experience', function() {
    return view('track.index');
});

Route::get('/contact', function() {
    return view('other.contact');
});

Route::get('/admin/posts', function() {
    return view('admin.posts');
});

Route::get('/admin/posts/view', function() {
    return view('admin.view_post');
});

Route::get('/admin/posts/edit', function() {
    return view('admin.edit');
});

Route::get('/admin/comments', function() {
    return view('admin.comments');
});

Route::get('/admin/comments/view', function() {
    return view('admin.view_comment');
});

Route::get('/admin/contact', function() {
    return view('admin.contact');
});

Route::get('/admin/contact/view', function() {
    return view('admin.view_contact');
});

/* Admin section: Login, logout and dashboard */

Route::get('/admin/login', [
    'uses' => 'UserController@getUserLogin',
    'as' => 'admin.login',
    'middleware' => ['guest']
]);

Route::post('/admin/login', [
    'uses' => 'UserController@postUserLogin',
    'as' => 'admin.login',
    'middleware' => ['guest']
]);

Route::get('/admin/logout', [
    'uses' => 'UserController@getUserLogout',
    'as' => 'admin.logout',
    'middleware' => ['auth']
]);

Route::get('/admin/dashboard', [
    'uses' => 'UserController@getDashboard',
    'as' => 'admin.dashboard',
    'middleware' => ['auth']
]);

/* Posts section: Create, Edit, View, Load etc. */

Route::get('/admin/posts/index', [
    'uses' => 'PostController@getPostIndex',
    'as' => 'post.index',
    'middleware' => ['auth']
]);

Route::get('/admin/posts/create', [
    'uses' => 'PostController@getCreatePost',
    'as' => 'post.create',
    'middleware' => ['auth']
]);

Route::post('/admin/posts/create', [
    'uses' => 'PostController@postCreatePost',
    'as' => 'post.create',
    'middleware' => ['auth']
]);

Route::get('/admin/posts/edit/{post_id}', [
    'uses' => 'PostController@getEditPost',
    'as' => 'post.edit',
    'middleware' => ['auth']
]);

Route::post('/admin/posts/edit', [
    'uses' => 'PostController@postUpdatePost',
    'as' => 'post.update',
    'middleware' => ['auth']
]);

Route::get('/admin/posts/change_publish_state/{post_id}/{state}', [
    'uses' => 'PostController@getChangePublishState',
    'as' => 'post.change_publish',
    'middleware' => ['auth']
]);

Route::get('/admin/posts/delete/{post_id}', [
    'uses' => 'PostController@getDeletePost',
    'as' => 'post.delete',
    'middleware' => ['auth']
]);