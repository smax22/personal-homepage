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

Route::get('/', ['as' => 'blog.index', function (\App\Http\Contracts\PostRepositoryInterface $post_repository) {
    return view('blog.index', ['posts' => $post_repository->getAllPosts()]);
}]);

Route::get('/posts/{tag}', ['as' => 'blog.by_tag', function (\App\Http\Contracts\PostRepositoryInterface $post_repository, $tag) {
    return view('blog.index', ['posts' => $post_repository->getPostsByTag($tag)]);
}]);

Route::get('/posts/{post_id}/{seo_url}', ['as' => 'blog.post', function(\App\Http\Contracts\PostRepositoryInterface $post_repository, $post_id) {
    return view('blog.single', ['post' => $post_repository->getPost($post_id)]);
}]);

Route::get('/web-development', ['as' => 'web_dev.index', function() {
    return view('webdev.index');
}]);

Route::get('/experience', ['as' => 'experience.index', function() {
    return view('track.index');
}]);

Route::get('/contact', ['as' => 'contact.form', function() {
    return view('other.contact');
}]);

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

Route::get('/admin/posts/view/{post_id}', [
    'uses' => 'PostController@getViewPost',
    'as' => 'post.view',
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

Route::post('/admin/posts/add_relation', [
    'uses' => 'PostController@postAddRelationship',
    'as' => 'post.add_relation',
    'middleware' => ['auth']
]);

Route::get('/admin/posts/remove_relation/{source_post_id}/{target_post_id}', [
    'uses' => 'PostController@getRemoveRelationship',
    'as' => 'post.remove_relation',
    'middleware' => ['auth']
]);

Route::get('/admin/posts/delete/{post_id}', [
    'uses' => 'PostController@getDeletePost',
    'as' => 'post.delete',
    'middleware' => ['auth']
]);

/* Tags */

Route::get('/admin/tags/index', [
    'uses' => 'TagController@getTagIndex',
    'as' => 'tags.index',
    'middleware' => ['auth']
]);

Route::post('/admin/tags/create', [
    'uses' => 'TagController@postCreateTag',
    'as' => 'tag.create',
    'middleware' => ['auth']
]);

Route::get('/admin/tags/delete/{tag_id}', [
    'uses' => 'TagController@getDeleteTag',
    'as' => 'tag.delete',
    'middleware' => ['auth']
]);

Route::get('/admin/tags/show_as_filter/{tag_id}/{show}', [
    'uses' => 'TagController@getChangeShowAsFilter',
    'as' => 'tag.show_as_filter',
    'middleware' => ['auth']
]);

/* Comment related routes */

Route::get('/admin/comments/index', [
    'uses' => 'CommentController@getCommentIndex',
    'as' => 'comment.index',
    'middleware' => ['auth']
]);

Route::post('/comment/create', [
    'uses' => 'CommentController@postCreateComment',
    'as' => 'comment.create',
    'middleware' => ['auth']
]);

Route::get('/admin/comments/delete', [
    'uses' => 'CommentController@getDeleteComment',
    'as' => 'comment.delete',
    'middleware' => ['auth']
]);

/* Contact messages */
Route::get('/admin/contact/index', [
    'uses' => 'ContactMessageController@getContactMessageIndex',
    'as' => 'contact.index',
    'middleware' => ['auth']
]);

Route::get('/admin/contact/read/{contact_message_id}', [
    'uses' => 'ContactMessageController@getMarkAsRead',
    'as' => 'admin.contact_message_read',
    'middleware' => ['auth']
]);

Route::post('/contact/send/', [
    'uses' => 'ContactMessageController@postSendContactMessage',
    'as' => 'contact.send_message',
]);

/* Impressum */

Route::get('/impressum/', ['as' => 'other.impressum', function() {
    return view('other.impressum');
}]);