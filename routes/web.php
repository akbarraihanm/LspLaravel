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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/','ProdukController@index');
Route::get('/user/belanja','ProdukController@showDataToUser');
Route::get('/user/beli/{id}','ProdukController@edit');

Route::get('/login','PenggunaController@loginPage');
Route::get('/daftar','PenggunaController@create');
Route::get('/user/home','PenggunaController@index');
Route::get('/logout','PenggunaController@logout');
Route::post('/daftarpost','PenggunaController@store');
Route::post('/loginpost','PenggunaController@login');

Route::post('/keranjangpost','KeranjangController@store');
Route::get('/user/keranjang','KeranjangController@index');

Route::get('/admin/home','AdminController@index');
Route::get('/admin/addproduk','AdminController@create');
Route::get('/adminlogout','AdminController@logout');
Route::get('/admin/login','AdminController@login');
Route::get('/admin/edit/{id}','AdminController@edit');
Route::post('/adminpost','AdminController@store');
Route::post('/adminlogin','AdminController@loginPost');
Route::put('/update/{id}','AdminController@update');
Route::delete('/delete/{id}','AdminController@destroy');
