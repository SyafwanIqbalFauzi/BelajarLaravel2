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


Route::get('/belajar', function () {
    $data['nama'] = "Syafwan Iqbal Fauzi";
    $data['umur'] = 22;
    $data['ttl'] = "Bandung, 23 April 1997";
    return view('belajar',$data);
});

Route::get('/siswa','SiswaController@index');
