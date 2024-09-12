<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Auth::routes(['verify' => false, 'reset' => false, 'register' => false]);

Route::get('/', 'HomeController@index')->name('home');
//pegawai
Route::get('/pegawai', 'PegawaiController@index')->name('pegawai');
Route::post('/pegawai/store', 'PegawaiController@store')->name('pegawai.store');
Route::get('/pegawai/edit/{id}', 'PegawaiController@edit')->name('pegawai.edit');
Route::delete('/pegawai/delete/{id}', 'PegawaiController@destroy')->name('pegawai.delete');
Route::get('/pegawai-datatable', 'PegawaiController@getPegawaiDataTable');
//pengguna
Route::get('/pengguna', 'PenggunaController@index')->name('pengguna');
Route::get('/pengguna/edit/{id}', 'PenggunaController@edit')->name('pengguna.edit');
Route::post('/pengguna/store', 'PenggunaController@store')->name('pengguna.store');
Route::delete('/pengguna/delete/{id}', 'PenggunaController@destroy')->name('pengguna.delete');
Route::get('/pengguna-datatable', 'PenggunaController@getPenggunaDataTable');
//jenis dokumen
Route::get('/jenis', 'JenisController@index')->name('jenis');
Route::get('/jenis/edit/{id}', 'JenisController@edit')->name('jenis.edit');
Route::post('/jenis/store', 'JenisController@store')->name('jenis.store');
Route::delete('/jenis/delete/{id}', 'JenisController@destroy')->name('jenis.delete');
Route::get('/jenis-datatable', 'JenisController@getJenisDataTable');
//lokasi arsip
Route::get('/lokasi_arsip', 'LokasiArsipController@index')->name('lokasi_arsip');
Route::get('/lokasi_arsip/edit/{id}', 'LokasiArsipController@edit')->name('lokasi_arsip.edit');
Route::post('/lokasi_arsip/store', 'LokasiArsipController@store')->name('lokasi_arsip.store');
Route::delete('/lokasi_arsip/delete/{id}', 'LokasiArsipController@destroy')->name('lokasi_arsip.delete');
Route::get('/lokasi-arsip-datatable', 'LokasiArsipController@getLokasiDataTable');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');