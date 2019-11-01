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


// Web pages routes
Route::get('/', 'PagesController@index');
Route::get('/music', 'PagesController@songs');
Route::get('/contact', 'PagesController@contact');
Route::get('/gallery', 'PagesController@gallery');

// Contact forms routes
Route::post('/send', 'ContactController@send');
Route::post('/book', 'ContactController@book');
Route::post('/subscribe', 'ContactController@subscription');

//Adminstrator routes
Route::get('/home', 'PagesController@home')->middleware('auth');
Route::get('/muzic', 'PagesController@music')->middleware('auth');
Route::get('/image', 'PagesController@image')->middleware('auth');


Route::post('/music/upload', 'SongsController@store');
Route::post('/image/upload', 'ImageController@save');

Route::post('/delete_song/{id}', 'SongsController@delete');

Route::get('/register', 'AuthController@registrationForm');
Route::post('/register', 'AuthController@registerUser');

Route::get('/admin', 'AuthController@loginForm');
Route::post('/admin', 'AuthController@login');

Route::get('/logout', 'AuthController@logout');
