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

Route::get('/admin', function() {
    return view('admin.dashboard');
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