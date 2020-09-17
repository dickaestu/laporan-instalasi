<?php

use App\Http\Controllers\AdminController;
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
Route::prefix('admin')
    ->middleware('auth')
    ->group(function () {
        Route::get('/', 'AdminController@dashboard')
            ->name('dashboard-admin');
        Route::get('kelola-teknisi', 'AdminController@index')->name('kelola-teknisi');
        Route::get('laporan-pekerjaan-teknisi', 'AdminController@laporan')->name('laporan-pekerjaan-teknisi');
        Route::get('create-teknisi', 'AdminController@createTeknisi')->name('create-teknisi');
        Route::post('store-akun-teknisi', 'AdminController@storeAkunTeknisi')->name('store-akun-teknisi');
    });

//-----------------EXPORT-ADMIN--------------------//
Route::get('/pages/admin/export/export-pdf', 'AdminController@exportPdf')->name('pages/admin/export/export-pdf');
Route::get('/pages/admin/exportExcel', 'AdminController@exportExcel')->name('pages/admin/export/exportExcel');



//-----------------TEKNISI--------------------//

Route::get('/', 'DashboardController@index')->name('dashboard')->middleware('auth');
Route::resource('/form-pekerjaan', 'FormPekerjaanController')->middleware('auth');

//-----------------EKSPORT-TEKNISI--------------------//
Route::get('/pages/export/{id}/export-teknisi', 'FormPekerjaanController@exportTeknisi')->name('pages/export/export-teknisi');


Auth::routes();
