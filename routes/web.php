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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login','ProfileController@index');
Route::get('/daftar','DaftarController@index');
Route::post('/daftar','DaftarController@store');

Route::get('/datasiswa','PendaftaranController@datasiswa');
Route::get('/dataortu','PendaftaranController@dataortu');
Route::get('/datasekolah','PendaftaranController@datasekolah');
Route::get('/nilaiusbn','PendaftaranController@nilaiusbn');
Route::get('/nilaiunbk','PendaftaranController@nilaiunbk');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
