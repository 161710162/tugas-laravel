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
Route::get('paragraf','SiswaController@paragraf');
Route::get('hargahp','SiswaController@hargahp');
Route::get('tabel','SiswaController@tabel');
Route::get('/gambar',function () {
       return view('gambar');
});
Route::get('gamepc','SiswaController@gamepc');

Route::get('/', function () {
    return view('welcome');
    
Route::get('aboute','AbouteController@index');


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
