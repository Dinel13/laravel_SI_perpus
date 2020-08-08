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

Route::get('/', 'Frontend\\Bookcontroller@index')->name('homepage');
Route::get('/buku/{book}/', 'Frontend\\Bookcontroller@show')->name('buku.show');
Route::post('/buku/{book}/pinjam', 'Frontend\\Bookcontroller@pinjam')->name('buku.pinjam')->middleware('auth');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
 