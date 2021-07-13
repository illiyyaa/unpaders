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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/unpaders', 'UnpadersController@index')->name('unpaders');
Route::get('/alumni', 'AlumniController@index')->name('alumni');
Route::get('/aktual', 'AktualController@index')->name('aktual');
Route::get('/lapak', 'LapakController@index')->name('lapak');
Route::get('/loker', 'LokerController@index')->name('loker');

Route::get('/belanja', 'BelanjaController@index')->name('belanja');
Route::get('/belanjaumum', 'BelanjaController@belanja')->name('belanjaumum');

Route::get('/profil', 'ProfilController@index')->name('profil');
Route::get('/profilumum', 'ProfilController@profil')->name('profilumum');

Route::get('/artikel', 'ArtikelController@index')->name('artikel');
Route::get('/tambahArtikel', 'ArtikelController@tambah')->name('tambahArtikel');

Route::get('/disclaimer', 'FooterController@disclaimer')->name('disclaimer');
Route::get('/kontak', 'FooterController@kontak')->name('kontak');
Route::get('/kontributor', 'FooterController@kontributor')->name('kontributor');
Route::get('/tentang', 'FooterController@tentang')->name('tentang');

Route::get('/aktual/acara', 'AktualController@acara')->name('acara');
Route::get('/aktual/berita', 'AktualController@berita')->name('berita');
Route::get('/aktual/opini', 'AktualController@opini')->name('opini');

Route::get('/alumni/berkabar', 'AlumniController@berkabar')->name('berkabar');
Route::get('/alumni/kenangan', 'AlumniController@kenangan')->name('kenangan');
Route::get('/alumni/wikialumni', 'AlumniController@wikialumni')->name('wikialumni');

Route::get('/lapak/kuliner', 'LapakController@kuliner')->name('kuliner');
Route::get('/lapak/kiatbisnis', 'LapakController@kiatbisnis')->name('kiatbisnis');
Route::get('/lapak/merchandise', 'LapakController@merchandise')->name('merchandise');
Route::get('/lapak/preloved', 'LapakController@preloved')->name('preloved');
Route::get('/lapak/umkmcenter', 'LapakController@umkmcenter')->name('umkmcenter');

Route::get('/detail', 'DetailController@detail')->name('detail');
Route::get('/detail1', 'DetailController@detail1')->name('detail1');
Route::get('/detailloker', 'DetailController@detailloker')->name('detailloker');
