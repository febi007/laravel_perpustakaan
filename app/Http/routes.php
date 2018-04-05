<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
//************BUKUS*************/
Route::get('/buku', 'BukuController@index')->name('buku.index');
Route::get('/buku/create', 'BukuController@create')->name('buku.create');
Route::post('/buku/create','BukuController@store');
Route::get('/buku/{buku}/edit', 'BukuController@edit')->name('buku.edit');
Route::patch('/buku/{buku}/edit', 'BukuController@update')->name('buku.update');
Route::delete('/buku/{buku}/delete', 'BukuController@destroy')->name('buku.destroy');
//************JURUSANS*************/
Route::get('/jurusan', 'JurusanController@index')->name('jurusan.index');
Route::get('/jurusan/create', 'JurusanController@create')->name('jurusan.create');
Route::post('/jurusan/create','JurusanController@store');
Route::get('/jurusan/{jurusan}/edit', 'JurusanController@edit')->name('jurusan.edit');
Route::patch('/jurusan/{jurusan}/edit', 'JurusanController@update')->name('jurusan.update');
Route::delete('/jurusan/{jurusan}/delete', 'JurusanController@destroy')->name('jurusan.destroy');
//************PEMINJAMANS*************/
Route::get('/pinjam', 'PinjamController@index')->name('pinjam.index');
Route::get('/pinjam/create', 'PinjamController@create')->name('pinjam.create');
Route::post('/pinjam/create','PinjamController@store');
Route::get('/pinjam/{pinjam}/edit', 'PinjamController@edit')->name('pinjam.edit');
Route::patch('/pinjam/{pinjam}/edit', 'PinjamController@update')->name('pinjam.update');
Route::delete('/pinjam/{pinjam}/delete', 'PinjamController@destroy')->name('pinjam.destroy');
//************MAHASISWAS*************/
Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa.index');
Route::get('/mahasiswa/create', 'MahasiswaController@create')->name('mahasiswa.create');
Route::post('/mahasiswa/create','MahasiswaController@store');
Route::get('/mahasiswa/{mahasiswa}/edit', 'MahasiswaController@edit')->name('mahasiswa.edit');
Route::patch('/mahasiswa/{mahasiswa}/edit', 'MahasiswaController@update')->name('mahasiswa.update');
Route::delete('/mahasiswa/{mahasiswa}/delete', 'MahasiswaController@destroy')->name('mahasiswa.destroy');