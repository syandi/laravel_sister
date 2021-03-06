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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/siswa','SiswaController@index');
Route::get('/siswa/create', 'SiswaController@create');
Route::post('/siswa', 'SiswaController@store');
Route::get('/siswa/{id}/edit', 'SiswaController@edit');
Route::post('/siswa/{id}', 'SiswaController@Update');
Route::get('/siswa/{id}/remove', 'SiswaController@destroy');
Route::get('/', 'SiswaController@index');
Route::get('/siswa/search', 'SiswaController@search');

Route::get('/kelas','KelasController@index');
Route::get('/kelas/create', 'KelasController@create');
Route::post('/kelas', 'KelasController@store');
Route::get('/kelas/{id}/edit', 'KelasController@edit');
Route::post('/kelas/{id}', 'KelasController@Update');
Route::get('/kelas/{id}/remove', 'KelasController@destroy');