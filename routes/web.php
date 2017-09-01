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
})->name('home');

Route::get('/users', 'UserController@index')->name('UserIndex');

Route::get('/categories', 'CategoryController@index')->name('CatIndex');
Route::get('/category/{id}', 'CategoryController@view')->name('ViewCat');

Route::get('/tags', 'TagController@index')->name('IndexTags');
Route::get('/tag/{id}', 'TagController@show')->name('ViewTag');


Route::group(['prefix' => 'admin'], function () {
    Route::get('/categories', 'Admin\CategoryController@index')->name('AdminCatIndex');
    Route::get('/category/{id}', 'Admin\CategoryController@view')->name('AdminViewCat');
    Route::get('/category/new', 'Admin\CategoryController@add')->name('AdminNewCat');
    Route::post('/category/create', 'Admin\CategoryController@create')->name('AdminSaveNewCat');
    Route::get('/category/{id}/edit', 'Admin\CategoryController@edit')->name('AdminEditCat');
    Route::post('/category/{id}/update', 'Admin\CategoryController@update')->name('AdminUpdateCat');
    Route::get('/category/{id}/delete', 'Admin\CategoryController@delete')->name('AdminDelCat');

    Route::get('/tags', 'Admin\TagController@index')->name('AdminIndexTags');
    Route::get('/tag/{id}', 'Admin\TagController@show')->name('AdminViewTag');
    Route::get('/tag/new', 'Admin\TagController@add')->name('AdminNewTag');
    Route::post('/tag/save', 'Admin\TagController@create')->name('AdminSaveTag');
    Route::get('/tag/{id}/edit', 'Admin\TagController@edit')->name('AdminEditTag');
    Route::post('/tag/{id}/update', 'Admin\TagController@update')->name('AdminUpdateTag');
    Route::get('/tag/{id}/delete', 'Admin\TagController@delete')->name('AdminDelTag');
});
















