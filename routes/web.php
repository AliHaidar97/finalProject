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

Route::get('/', 'PagesControler@home');

Route::get('/dashboard','PagesControler@dashboard');

Route::get('/product','PostControler@index');

Route::get('/stat','PagesControler@stat');

Route::get('/Profile','UsersController@profile');

Route::resource('posts','PostControler');

Route::resource('Users','UsersController');

Route::resource('categories','CategorieController');

Auth::routes();

Route::get('/dashboard', 'HomeController@index');




