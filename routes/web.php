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
    return view('welcome');
})->name('home');

Route::get('/register', function () {
    return view('register');
});

use App\Http\Controllers\ShopController;
use App\Http\Controllers\HomeController;

Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', function () {
    return view('about'); // Pastikan ada file resources/views/about.blade.php
})->name('about');
