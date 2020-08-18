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

Route::get('/', 'PagesController@index');

Route::get('/artikel_penyedia', [
	'uses' => 'PagesController@artikel_penyedia',
]);
Route::get('/non_penyedia','PagesController@non_penyedia');
Route::get('/video','PagesController@video');
Route::get('/kegiatan-registrasi','PagesController@kegiatan_registrasi');
Route::get('/kegiatan-unduh-materi','PagesController@kegiatan_unduh_materi');
Route::get('/gallery', 'PagesController@gallery');
Route::get('/kontak', 'PagesController@kontak');

Route::get('/regulasi', 'PagesController@regulasi_all');