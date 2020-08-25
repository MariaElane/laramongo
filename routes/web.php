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

Route::get('/home', 'HomeController@index')->name('home2');
Route::get('/post/index', 'PostController@index')->name('post.index');
Route::get('/post', 'PostController@form')->name('post');
Route::post('/post/savePost', 'PostController@savePost')->name('savePost');
Route::put('/post/edit/{_id}', 'PostController@edit')->name('post.edit');
