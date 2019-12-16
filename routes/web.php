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
Route::get('/base', 'AdminController@basefungsi') ;
Route::get('/dashboard', 'AdminController@dashboardfungsi')-> name('dashboard') ;
Route::resource('kasir', 'KasirController');
Route::resource('pasok', 'PasokController');
Route::resource('barang', 'BarangController');

Route::get('distributor/edit/{id}', 'DistributorController@edit');
Route::get('distributor/add', 'DistributorController@create');
Route::get('distributor/delete/{id}', 'DistributorController@destroy');
Route::post('distributor/store', 'DistributorController@store');
Route::resource('distributor', 'DistributorController');
Route::resource('penjualan', 'PenjualanController');


Route::get('/', function () {
    return view('welcome');
});
