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

Route::get('/', 'HomeController@index')->name("main");
Route::get('/siswa','SiswaController@index');
Route::get('/siswa/create','SiswaController@create');
Route::post('/siswa/post','SiswaController@post');
Route::get('/siswa/{id}/delete','SiswaController@delete');

//Route::get('/siswa', 'SiswaController@index')->name("minor");
