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
});

Route::get('/register', 'AuthController@getRegister')->name('register')->middleware('guest');
Route::post('/register', 'AuthController@postRegister')->middleware('guest');
Route::get('/login', 'AuthController@getLogin')->middleware('guest')->name('login');
Route::post('/login', 'AuthController@postLogin')->middleware('guest');
Route::get('/logout', 'AuthController@logout')->name('logout')->middleware('auth')->name('logout');
Route::get('/home', function() {
    return view('home');
})->middleware('auth')->name('home');
Route::post('/post', 'AuthController@postPost');

Route::get('/tambah', 'BeritaController@index')->name('tambah');
Route::post('/save', 'BeritaController@store')->name('berita.store');
Route::get('/berita', 'BeritaController@show')->name('berita.show');
Route::get('/edit/{id}', 'BeritaController@edit');
Route::put('/update/{id}', 'BeritaController@update');
Route::get('delete/{id}','BeritaController@delete');

Route::get('/jual','JualController@index')->name('jual.index');
Route::post('/jualUpload','JualController@store')->name('jual.store');


