<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin', 'AdminController@index')->name('kelola-teknisi');


Route::get('/hasil-pengerjaan/{id}/edit', 'FormPekerjaanController@edit')->name('edit-data')->middleware('auth');
Route::put('/hasil-pengerjaan/{id}/update', 'FormPekerjaanController@update')->name('update-data')->middleware('auth');
Route::delete('/hasil-pengerjaan/{id}', 'FormPekerjaanController@destroy')->name('delete-data')->middleware('auth');
Route::resource('/', 'FormPekerjaanController')->middleware('auth');


Auth::routes();
