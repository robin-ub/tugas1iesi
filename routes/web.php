<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'HomeController@index'); // Gantilah HomeController@index dengan nama controller dan metodenya untuk homepage.
Route::get('/cetak-dokumen-tahap-1', 'CetakDokumenController@tahap1'); // Sesuaikan dengan nama controller dan metodenya.
Route::get('/cetak-dokumen-tahap-2', 'CetakDokumenController@tahap2'); // Sesuaikan dengan nama controller dan metodenya.
Route::get('/cetak-dokumen-tahap-2-1', 'CetakDokumenController@tahap2_1'); // Sesuaikan dengan nama controller dan metodenya.
Route::get('/pembayaran-1', 'PembayaranController@pembayaran1'); // Sesuaikan dengan nama controller dan metodenya.
Route::get('/pembayaran-1-1', 'PembayaranController@pembayaran1_1'); // Sesuaikan dengan nama controller dan metodenya.


Route::get('/', function () {
    return view('welcome');
});
