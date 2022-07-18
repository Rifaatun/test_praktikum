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
    return view('utama');
});

Route::get('/utama', function () {
    return view('utama');
});

Route::get('/kategori', function () {
    return view('kategori');
});

Route::get('/proyek', function () {
    return view('proyek');
});

Route::get('/tambah-proyek', function () {
    return view('tambah-proyek');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/donatur', function () {
    return view('donatur');
});

Route::get('/daftar-donasi', function () {
    return view('daftar-donasi');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
