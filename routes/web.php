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

Route::get('/Peminjaman', 'PeminjamanController@index')->name('Peminjaman');
Route::delete('/Peminjaman/{id}', 'PeminjamanController@destroy');
Route::get('/Peminjaman','PeminjamanController@index');
Route::get('/Peminjaman/cari','PeminjamanController@cari');

Route::get('/Pengembalian', 'PengembalianController@index')->name('Pengembalian');
Route::delete('/Pengembalian/{id}', 'PengembalianController@destroy');
Route::get('/Pengembalian','PengembalianController@index');
Route::get('/Pengembalian/cari','PengembalianController@cari');

Route::get('/Buku', 'BukuController@index')->name('Buku');
Route::get('/Buku/create', 'BukuController@create');
Route::post('/Buku', 'BukuController@store');
Route::get('/Buku/{id}/edit', 'BukuController@edit');
Route::patch('/Buku/{id}', 'BukuController@update');
Route::delete('/Buku/{id}', 'BukuController@destroy');
Route::get('/Buku','BukuController@index');
Route::get('/Buku/cari','BukuController@cari');

Route::get('/Buku-u', 'BukuUController@index')->name('Buku-u');
Route::get('/Buku-u','BukuUController@index');
Route::get('/Buku-u/cari','BukuUController@cari');

Route::get('/PeminjamanU', 'PeminjamanUController@index')->name('PeminjamanU');
Route::get('/Peminjaman/create', 'PeminjamanUController@create');
Route::post('/PeminjamanU', 'PeminjamanUController@store');
Route::get('/PeminjamanU/cari','PeminjamanUController@cari');

Route::get('/PengembalianU', 'PengembalianUController@index')->name('PengembalianU');
Route::get('/Pengembalian/create', 'PengembalianUController@create');
Route::post('/PengembalianU', 'PengembalianUController@store');
Route::get('/PengembalianU/cari','PengembalianUController@cari');