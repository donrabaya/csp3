<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('posts/index');
});

Route::get('/', 'PostsController@index');

Route::get('/posts/create', 'HomeController@create');

Route::get('/posts/{id}', 'PostsController@show')->name('posts.show');

Route::get('/posts/tags/{tag}', 'TagsController@index');

Route::post('/post/{post}/comments','CommentsController@store');

Route::post('/posts', 'PostsController@store');

Route::get('posts/comment/{id}/edit','CommentsController@edit');

Route::post('posts/comment/{id}/edit','CommentsController@update');

Route::get('posts/comment/{id}/delete','CommentsController@delete');

Route::get('/posts/{post}/edit', 'PostsController@edit');

Route::post('/posts/{id}/edit', 'PostsController@update');

Route::get('/posts/{id}/delete', 'PostsController@delete');

Auth::routes();

Route::get('/home', 'PostsController@index');





 