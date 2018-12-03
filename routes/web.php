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
    return view('home');
});
Route::group(['prefix' => 'posts'], function () {
    Route::get('/','PostController@index')->name('posts.index')->middleware('auth');
    Route::get('/create','PostController@create')->name('posts.create')->middleware('auth');
    Route::get('/{id}/view','PostController@view')->name('posts.view');
    Route::post('/create','PostController@store')->name('posts.store')->middleware('auth');
    Route::get('/{id}/edit','PostController@edit')->name('posts.edit');
    Route::post('/{id}/edit','PostController@update')->name('posts.update');
    Route::get('/{id}/destroy','PostController@destroy')->name('posts.destroy');
    Route::get('/search','PostController@search')->name('posts.search');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
