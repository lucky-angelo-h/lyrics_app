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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/songs', 'SongsController@getSongs')->name('songs')->middleware('auth');
Route::get('/add_song', 'SongsController@addSong')->name('add_song')->middleware('auth');
Route::post('/save_song', 'SongsController@saveSong')->name('save_song')->middleware('auth');
Route::get('/edit_song/{id}', 'SongsController@editSong')->name('edit_song')->middleware('auth');
Route::post('/save_edit_song/{id}', 'SongsController@saveEditSong')->name('save_edit_song')->middleware('auth');
Route::get('/delete_song/{id}', 'SongsController@deleteSong')->name('delete_song')->middleware('auth');
Auth::routes();
// Route::get('/', 'MainLoginController@index')->name('login');
Route::get('/', 'HomeController@index')->name('home');
// Route::post('/register', 'MainRegisterController@register');
