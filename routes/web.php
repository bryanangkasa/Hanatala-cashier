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

Route::get('/', function () {
    return view('Index');
});

Route::get('/login', function () {
    return view('user/login');
});

Route::get('/register', function () {
    return view('user/register');
});

Route::get('/forgot', function () {
    return view('user/forgot');
});

Route::get('/kategori', function () {
    return view('kategori');
});

Route::get('/barang', function () {
    return view('barang');
});

Route::get('/pelanggan', function () {
    return view('pelanggan');
});

Route::get('/kasir', function () {
    return view('kasir');
});

Route::get('/transaksi', function () {
    return view('transaksi');
});