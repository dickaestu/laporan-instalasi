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

//-----------------ADMIN---------------------//

Route::get('/admin', 'AdminController@index')->name('kelola-teknisi');
Route::get('/pages/admin/dashboard-admin', 'AdminController@dashboard')->name('dashboard-admin');
Route::get('/pages/admin/laporan-pekerjaan-teknisi', 'AdminController@laporan')->name('laporan-pekerjaan-teknisi');

//-----------------EXPORT-ADMIN--------------------//
Route::get('/pages/admin/export/export-pdf', 'AdminController@exportPdf')->name('pages/admin/export/export-pdf');
Route::get('/pages/admin/exportExcel', 'AdminController@exportExcel')->name('pages/admin/export/exportExcel');



//-----------------TEKNISI--------------------//

Route::get('/pages.dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/hasil-pengerjaan/{id}/edit', 'FormPekerjaanController@edit')->name('edit-data')->middleware('auth');
Route::put('/hasil-pengerjaan/{id}/update', 'FormPekerjaanController@update')->name('update-data')->middleware('auth');
Route::delete('/hasil-pengerjaan/{id}', 'FormPekerjaanController@destroy')->name('delete-data')->middleware('auth');
Route::resource('/', 'FormPekerjaanController')->middleware('auth');

//-----------------EKSPORT-TEKNISI--------------------//
Route::get('/pages/export/{id}/export-teknisi', 'FormPekerjaanController@exportTeknisi')->name('pages/export/export-teknisi');


Auth::routes();
