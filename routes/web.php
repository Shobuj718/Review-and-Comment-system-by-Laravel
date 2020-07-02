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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post', 'PostController@index')->name('posts.index');
Route::get('/create', 'PostController@create')->name('posts.create');
Route::post('/store', 'PostController@store')->name('posts.store');
Route::get('/show/{id}', 'PostController@show')->name('posts.show');

Route::post('/comments', 'CommentController@store')->name('comments.store');


Route::get('posts', 'HomeController@posts')->name('posts');

Route::post('posts', 'HomeController@postPost')->name('posts.post');

Route::get('posts/{id}', 'HomeController@show')->name('post.show');