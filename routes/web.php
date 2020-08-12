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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'MahasiswaController@index');

Route::get('/mhs', 'MahasiswaController@index')->name('mhs.index');
Route::get('/mhs/list', 'MahasiswaController@mhs_list')->name('mhs.list');
Route::get('/mhs/create', 'MahasiswaController@create');
Route::post('/mhs/store', 'MahasiswaController@store');
Route::get('/mhs/edit/{nim}', 'MahasiswaController@edit');
Route::put('/mhs/update/{mahasiswa:nim}', 'MahasiswaController@update')->name('mhs.update');
Route::get('/mhs/delete/{mahasiswa:nim}', 'MahasiswaController@destroy')->name('mhs.delete');

Route::resource('/prodi', 'ProdiController');

Route::get('/', 'MataKuliahController@index');
Route::get('/mk', 'MatakuliahController@index')->name('mk.index');
Route::get('/mk/list', 'MatakuliahController@mk_list')->name('mk.list');
Route::get('/mk/create', 'MatakuliahController@create');
Route::post('/mk/store', 'MatakuliahController@store');
Route::get('/mk/edit/{kode_matakuliah}', 'MatakuliahController@edit');
Route::put('/mk/update/{matakuliah:kode_matakuliah}', 'MatakuliahController@update')->name('mk.update');
Route::get('/mk/delete/{matakuliah:kode_matakuliah}', 'MatakuliahController@destroy')->name('mk.delete');