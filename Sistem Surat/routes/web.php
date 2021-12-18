<?php

use App\Http\Controllers\WargaController;
use FontLib\Table\Type\name;
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
    return view('warga.login');
});
// Route::get('/login', function () {
//     return view('warga.login');
// });

Route::get('/template','kategoriSuratController@test')->name('revisi');

Auth::routes([
    'register' => false, 
    'reset' => false, 
    'verify' => false, 
  ]);
 
Route::group(['prefix' => 'Administrator', 'middleware' =>'auth'], function () {
   
    Route::resource('home', 'HomeController');
    Route::resource('kategori', 'kategoriSuratController');
    //Route::get('kategori/data/{id}','kategoriSuratController@data')->name('kategori.data');//  m
    Route::resource('pengajuan', 'dataPengajuanController');
    Route::post('/form-pengajuan', 'dataPengajuanController@pilihSurat')->name('form-surat-admin');
    Route::get('/pengajuan/{id}', 'dataPengajuanController@index')->name('list.kategori.pengajuan');

    Route::get('/riwayat', 'HomeController@riwayat')->name('riwayat.pengajuan');
    Route::get('/dashboard-kades', 'HomeController@dashboardKades')->name('dashboard-kades');

    Route::get('/list-kategori/{id}', 'HomeController@listkategori')->name('list.kategori');

    Route::get('/verifikasi-kelahiran/{id}', 'HomeController@verifKelahiran')->name('verifikasi-lahir');
    Route::get('/verifikasi-kematian/{id}', 'HomeController@verifKematian')->name('verifikasi-mati');
    Route::get('/verifikasi-umum/{id}', 'HomeController@verifUmum')->name('verifikasi-umum');
    Route::get('/verifikasi-pengantar-pindah/{id}', 'HomeController@verifPengantarPindah')->name('verifikasi-pindah');
    Route::get('/verifikasi-permohonan-pindah/{id}', 'HomeController@verifPermohonanPindah')->name('verifikasi-permohonan-pindah');
    Route::get('/verifikasi-pengantar-datang/{id}', 'HomeController@verifSuratPindahDatangWNI')->name('verifikasi-datang');
    Route::get('/verifikasi-permohonan-pindah-datang-WNI/{id}', 'HomeController@verifPermohonanDatang')->name('verifikasi-permohonan-datang');

    //Route::get('/list-kategori/data/{pesanan}', 'HomeController@listdatakategori')->name('list.kategori.data');
    Route::get('/cekpesanan','HomeController@cekPesanan')->name('cek.pesanan');
    Route::get('/list-pegawai', 'HomeController@admin')->name('admin.index');
    Route::post('/verifikasi', 'HomeController@verifikasi')->name('send.verifikasi');
    Route::get('/print/{id}', 'HomeController@print')->name('print.surat');
    Route::get('/jadi/{id}', 'HomeController@emailjadi')->name('send.jadi');
    Route::get('/register', 'HomeController@register')->name('admin.register');
    Route::post('/store', 'HomeController@registerstore')->name('register.store');
    Route::get('/admin/{id}', 'HomeController@editadmin')->name('admin.edit');
    Route::put('/admin/update/{id}', 'HomeController@adminupdate')->name('admin.update');
    Route::delete('/admin/{id}', 'HomeController@destroyadmin')->name('admin.destroy');

    Route::get('/ambil/{id}', 'HomeController@ambil')->name('ambil');
    Route::post('/verifikasi', 'HomeController@verifikasi')->name('send.verifikasi');
    Route::post('/tolak', 'HomeController@tolak')->name('tolak');

    Route::get('/rekap-tahun', 'HomeController@rekapTahun')->name('rekap.tahun');
    Route::post('/rekap-data', 'HomeController@rekapdata')->name('rekap.data');
    Route::get('/reset', 'HomeController@reset')->name('reset');



});

Route::group(['prefix' => 'member', 'namespace' => 'Warga'], function() {
    Route::get('/warga', 'LoginController@loginForm')->name('warga.login');
    Route::get('/registrasi', 'LoginController@registrasiForm')->name('warga.register');
    Route::post('/registrasi', 'LoginController@registrasistore')->name('registrasi.store');
    Route::post('/login', 'LoginController@login')->name('login.proses');
    


    Route::group(['middleware' => 'warga'], function () {
        Route::get('/print/{id}', 'WargaController@print')->name('print.surat.warga');
        Route::get('dashboard', 'WargaController@dashboard')->name('warga.dashboard');
        Route::post('/form-pengajuan', 'WargaController@pilihSurat')->name('form-surat');
        Route::get('home', 'WargaController@home')->name('warga.home');
        Route::get('logout', 'WargaController@logout')->name('warga.logout');
        Route::get('riwayat/filter', 'WargaController@filter')->name('warga.filter');
        Route::post('pengajuan', 'WargaController@pengajuanstore')->name('warga.pengajuan.store');
        Route::get('riwayat', 'WargaController@riwayat')->name('warga.riwayat');
        Route::get('kategori/data/{id}','WargaController@labelPengajuan')->name('load.kategori.data');//  m

    });
});