<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListBarangController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list-barang', [ListBarangController::class, 'tampilkan']);
// Menampilkan halaman About
Route::view('/about', 'about');
// Menampilkan halaman contact
Route::get('/contact', function () {
    return view('contact');
});

