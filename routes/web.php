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
Route::get('succes', 'PagesController@index')->middleware('auth');

Route::resource('tutorial','PagesController');

Route::resource('cat', 'CategoryController', ['except' => ['create']]);
Route::resource('admin', 'Admin\\PostsController');
Route::get('admin', 'PagesController@admin');
Route::resource('section', 'SectionController', ['except' => ['create']]);

Auth::routes();
