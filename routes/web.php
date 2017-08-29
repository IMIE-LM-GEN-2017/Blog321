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
/*
 * Utilisateurs
 */
Route::get('/users', 'User@index')->name('UserIndex');
/*
 * Catégories
 */
Route::get('/categories', 'Category@index')->name('CatIndex');
// Formulaire ajout
Route::get('/category/new', 'Category@add')->name('NewCat');
// Sauvegarde nouvel enregistrement
Route::post('/category/create', 'Category@create')->name('SaveNewCat');




















