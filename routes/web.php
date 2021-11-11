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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Login
Route::get('/dashboardAdmin', 'AdminController@dashboardAdmin');
Route::get('/dashboardDosen', 'DosenController@dashboardDosen');
Route::get('/dashboardMahasiswa', 'MahasiswaController@dashboardMahasiswa');
Route::get('/logout', 'LoginController@logout');
//Routing Hak_akses
Route::get('admin', function () { return view('dashboardAdmin'); })->middleware('checkRole:admin');
Route::get('dosen', function () { return view('dashboardDosen'); })->middleware(['checkRole:dosen,admin']);
Route::get('mahasiswa', function () { return view('dashboardMahasiswa'); })->middleware(['checkRole:mahasiswa,admin']);

//ADMIN//
//buat surat
Route::get('/buatSurat', 'BuatSuratController@jenisSurat');
//suratTugas
Route::get('/buatSurat/suratTugas', 'BuatSuratController@suratTugas');
Route::post('/buatSurat/simpanST', 'BuatSuratController@simpanST');

Route::get('/buatSurat/suratPersonalia', 'BuatSuratController@suratPersonalia');
Route::get('/buatSurat/suratUndangan', 'BuatSuratController@suratUndangan');
Route::get('/buatSurat/suratKKM', 'BuatSuratController@suratKKM');
Route::get('/buatSurat/beritaAcara', 'BuatSuratController@beritaAcara');

//suratmasuk
Route::get('/suratMasuk', 'SuratController@suratMasuk');

//suratkeluar
Route::get('/suratKeluar', 'SuratController@suratKeluar');
Route::get('/suratKeluar/editSK/{id}', 'SuratController@editSK');
Route::post('/suratKeluar/update','SuratController@update');
Route::get('/suratKeluar/deleteSK/{id}','SuratController@deleteSK');

//arsipsurat
Route::get('/arsipSurat', 'SuratController@arsipSurat');


//DOSEN//
//buat surat
Route::get('/buatSuratDosen', 'BuatSuratDosenController@jenisSurat');
//suratTugas
Route::get('/buatSuratDosen/suratTugas', 'BuatSuratDosenController@suratTugas');
Route::post('/buatSuratDosen/simpanST', 'BuatSuratDosenController@simpanST');

Route::get('/buatSuratDosen/suratPersonalia', 'BuatSuratDosenController@suratPersonalia');
Route::get('/buatSuratDosen/suratUndangan', 'BuatSuratDosenController@suratUndangan');
Route::get('/buatSuratDosen/suratKKM', 'BuatSuratDosenController@suratKKM');
Route::get('/buatSuratDosen/beritaAcara', 'BuatSuratDosenController@beritaAcara');

//suratmasuk
Route::get('/suratMasukDosen', 'SuratDosenController@suratMasuk');

//suratkeluar
Route::get('/suratKeluarDosen', 'SuratDosenController@suratKeluar');
Route::get('/suratKeluarDosen/editSK/{id}', 'SuratDosenController@editSK');
Route::post('/suratKeluarDosen/update','SuratDosenController@update');
Route::get('/suratKeluarDosen/deleteSK/{id}','SuratDosenController@deleteSK');

//arsipsurat
Route::get('/arsipSuratDosen', 'SuratDosenController@arsipSurat');


//MAHASISWA//
//buat surat
Route::get('/buatSuratMahasiswa', 'BuatSuratMahasiswaController@jenisSurat');
//suratTugas
Route::get('/buatSuratMahasiswa/suratTugas', 'BuatSuratMahasiswaController@suratTugas');
Route::post('/buatSuratMahasiswa/simpanST', 'BuatSuratMahasiswaController@simpanST');

Route::get('/buatSuratMahasiswa/suratPersonalia', 'BuatSuratMahasiswaController@suratPersonalia');
Route::get('/buatSuratMahasiswa/suratUndangan', 'BuatSuratMahasiswaController@suratUndangan');
Route::get('/buatSuratMahasiswa/suratKKM', 'BuatSuratMahasiswaController@suratKKM');
Route::get('/buatSuratMahasiswa/beritaAcara', 'BuatSuratMahasiswaController@beritaAcara');

//suratmasuk
Route::get('/suratMasukMahasiswa', 'SuratMahasiswaController@suratMasuk');

//suratkeluar
Route::get('/suratKeluarMahasiswa', 'SuratMahasiswaController@suratKeluar');
Route::get('/suratKeluarMahasiswa/editSK/{id}', 'SuratMahasiswaController@editSK');
Route::post('/suratKeluarMahasiswa/update','SuratMahasiswaController@update');
Route::get('/suratKeluarMahasiswa/deleteSK/{id}','SuratMahasiswaController@deleteSK');

//arsipsurat
Route::get('/arsipSuratMahasiswa', 'SuratMahasiswaController@arsipSurat');