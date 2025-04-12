<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/user/{id}', function ($id) {
    return 'user dengn ID' . $id;
});

//Route::get('/listbarang/{id}/{nama}', function ($id, $nama) {
//return view('list_barang', compact('id', 'nama'));
//});

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/users', function () {
        return 'Admin Users';
    });
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'processLogin']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::view('/about', 'about');
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', function () {
    return view('about'); // Pastikan ada file resources/views/about.blade.php
})->name('about');
