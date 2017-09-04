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

Route::get('/categories', 'CategoryController@index')->name('CatIndex');
Route::get('/category/{id}', 'CategoryController@show')->name('CatShow');

Route::get('/users', 'UserController@index')->name('UserIndex');
Route::get('/user/{id}', 'UserController@show')->name('UserShow');

Route::get('/tags', 'TagController@index')->name('TagIndex');
Route::get('/tag/{id}', 'TagController@show')->name('TagShow');

Route::get('/', 'PostController@index')->name('PostIndex');
Route::get('/post/{id}', 'PostController@show')->name('PostShow');


Route::group(['prefix' => 'admin'], function () {
    Route::get('/users', 'Admin\UserController@index')->name('AdminUserIndex');
    Route::get('/user/{id}', 'Admin\UserController@show')->name('AdminUserShow');
    Route::get('/user/{id}/edit', 'Admin\UserController@edit')->name('AdminUserEdit');
    Route::post('/user/{id}/update', 'Admin\UserController@update')->name('AdminUserUpdate');
    Route::get('/user/{id}/destroy', 'Admin\UserController@destroy')->name('AdminUserDestroy');
    Route::get('/dashboard', 'Admin\UserController@dashboard')->name('AdminUserDashboard');

    Route::get('/categories', 'Admin\CategoryController@index')->name('AdminCatIndex');
    Route::get('/category/create', 'Admin\CategoryController@create')->name('AdminCatCreate');
    Route::post('/category/store', 'Admin\CategoryController@store')->name('AdminCatStore');
    Route::get('/category/{id}', 'Admin\CategoryController@show')->name('AdminCatShow');
    Route::get('/category/{id}/edit', 'Admin\CategoryController@edit')->name('AdminCatEdit');
    Route::post('/category/{id}/update', 'Admin\CategoryController@update')->name('AdminCatUpdate');
    Route::get('/category/{id}/destroy', 'Admin\CategoryController@destroy')->name('AdminCatDestroy');

    Route::get('/tags', 'Admin\TagController@index')->name('AdminTagIndex');
    Route::get('/tag/create', 'Admin\TagController@create')->name('AdminTagCreate');
    Route::post('/tag/store', 'Admin\TagController@store')->name('AdminTagStore');
    Route::get('/tag/{id}', 'Admin\TagController@show')->name('AdminTagShow');
    Route::get('/tag/{id}/edit', 'Admin\TagController@edit')->name('AdminTagEdit');
    Route::post('/tag/{id}/update', 'Admin\TagController@update')->name('AdminTagUpdate');
    Route::get('/tag/{id}/destroy', 'Admin\TagController@destroy')->name('AdminTagDestroy');

    Route::get('/posts', 'Admin\PostController@index')->name('AdminPostIndex');
    Route::get('/post/create', 'Admin\PostController@create')->name('AdminPostCreate');
    Route::post('/post/store', 'Admin\PostController@store')->name('AdminPostStore');
    Route::get('/post/{id}', 'Admin\PostController@show')->name('AdminPostShow');
    Route::get('/post/{id}/edit', 'Admin\PostController@edit')->name('AdminPostEdit');
    Route::post('/post/{id}/update', 'Admin\PostController@update')->name('AdminPostUpdate');
    Route::get('/post/{id}/destroy', 'Admin\PostController@destroy')->name('AdminPostDestroy');
});

Auth::routes();
