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


Route::get('/detail', function(){
		return view('detail');
});

// 08/10/2017
Route::get('/barang/input','BarangController@form_input');
Route::post('/barang/input','BarangController@input_barang');



// Route::get('/detail2','detailController@tampil');

Route::get('/wkwkwk','pegawai\lab\detailController@profile');


Route::get('/mahasiswa','mahasiswaController@ambil_data');


// // blog

// Route::get('/halaman1','Blog\BlogController@halaman1');
// Route::get('/halaman2','Blog\BlogController@halaman2');

// // forum
// Route::get('/forum','Forum\ForumController@forum');
// Route::get('/komentar','Forum\ForumController@komentar');
// Route::get('/login','Forum\ForumController@login');