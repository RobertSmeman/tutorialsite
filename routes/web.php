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

Route::get('/', 'PagesController@Index');
Route::get('/tutorial', 'PagesController@Tutorial')->name('tutorial.single');

Route::resource('admin', 'Admin\\PostsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
