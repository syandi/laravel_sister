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

<<<<<<< HEAD
Route::get('/siswa','SiswaController@index');
Route::get('/siswa/create','SiswaController@create');
=======
Route::get('/siswa','StudentController@index');
Route::get('/siswa/baru', 'StudentController@create');
Route::post('/siswa', 'StudentController@store');
>>>>>>> 6b02f463704303730c87ca194959b5eaa87d967e
