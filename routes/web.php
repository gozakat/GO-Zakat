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
    return view('rumah/imah');
});
Route::get('/konversi', function () {
    return view('konversi/index');
});
Route::get('/daftarmasjid', function () {
    return view('daftarmasjid/index');
});



Route::get('/zakat/create','Pembayaran@create');
Route::post('/zakat','Pembayaran@store');
Route::get('/tampil/index','tampilController@index')->name('tampil.index');


Route::get('/zakat/create2','PembayaranController@create');
Route::post('/zakat','PembayaranController@store');
Route::get('/tampil/index2','TampilController2@index')->name('tampil.index2');
/* Route::get('/pembayaran/create','Pembayaran@create')->name('/pembayaran.create');
Route::post('/pembayaran','Pembayaran@store')->name('pembayaran.store'); */

Route::get('/rumah','HomeController@rumah')->name('rumah');
Route::get('/konversi','Konversi@index')->name('konversi');
Route::get('/daftarmasjid','Daftarmasjid@index')->name('daftarmasjid');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/home', 'HomeController@log')->name('home')->middleware('verified');
Route::get('/homelogin', 'HomeController@login')->name('homelogin')->middleware('verified');




