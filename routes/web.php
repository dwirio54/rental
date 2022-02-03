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

Route::get('/', 'WelcomeController@index')->name('/');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@index')->name('dashboard.index');

Route::group(['prefix'=>'barang'],function(){
    Route::get('/index','BarangController@index')->name('barang.index');
    Route::get('/edit','BarangController@edit')->name('barang.edit');
    Route::get('/create','BarangController@create')->name('daftarbarang.create');
    route::post('/post','BarangController@store')->name('daftarbarang.store');
    Route::delete('delete/{barang}', 'BarangController@destroy')->name('daftarbarang.delete');
});

Route::group(['prefix'=>'transaksi'],function(){
    Route::get('/index', 'TransactionController@index')->name('transaksi.index');
});

Route::group(['prefix'=>'pengembalian'],function(){
    Route::get('/index', 'RefundController@index')->name('pengembalian.index');
});