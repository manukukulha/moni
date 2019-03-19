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

Route::get('/', 'Web\PageController@index')->name('home');
Route::get('/es', 'Web\PageController@es')->name('es');

Auth::routes();

//Web

Route::get('blog', 'Web\PageController@blog')->name('blog');
Route::get('work', 'Web\PageController@work')->name('work');
Route::get('post/{slug}', 'Web\PageController@post')->name('post');
Route::get('category/{slug}', 'Web\PageController@category')->name('category');
Route::get('tag/{slug}', 'Web\PageController@tag')->name('tag');
Route::get('user/{slug}', 'Web\PageController@user')->name('user');

//Admin

Route::resource('tags', 'Admin\TagController');
Route::resource('categories', 'Admin\CategoryController');
Route::resource('posts', 'Admin\PostController');
Route::resource('works', 'Admin\WorkController');
Route::resource('messages', 'Admin\MessageController');
Route::resource('users', 'Admin\UserController');
Route::resource('category-works', 'Admin\CategoryWorkController');
