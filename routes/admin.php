<?php

use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\BorrowController;

//admin
Route::get('/', 'HomeController@index')->name('admin');

//penulis
Route::get('/penulis', 'AutorController@index')->name('autor.index');
Route::get('/penulis/buat', 'AutorController@create')->name('autor.buat');
Route::post('/penulis', 'AutorController@store')->name('autor.simpan');
Route::get('/penulis/{autor}/edit', 'AutorController@edit')->name('autor.edit');
Route::put('/penulis/{autor}', 'AutorController@update')->name('autor.update');
Route::get('/penulis/{autor}/hapus', 'AutorController@destroy')->name('autor.hapus');

//data
Route::get('/penulis/data', 'DataController@autor')->name('autor.data');
Route::get('/buku/data', 'DataController@book')->name('book.data');
Route::get('/pinjam/data', 'DataController@borrow')->name('borrow.data');

//buku
Route::get('/buku', 'BookController@index')->name('buku.index');
Route::get('/buku/buat', 'BookController@create')->name('buku.buat');
Route::post('/buku', 'BookController@store')->name('buku.simpan');
Route::get('/buku/{book}/edit', 'BookController@edit')->name('buku.edit');
Route::put('/buku/{book}', 'BookController@update')->name('buku.update');
Route::get('/buku/{book}/hapus', 'BookController@destroy')->name('buku.hapus');

//borrow
Route::get('/pinjam', 'BorrowController@index')->name('borrow.index');
Route::put('/pinjam/{borrowHistory}/return', 'BorrowController@returnBook')->name('borrow.return');