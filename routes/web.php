<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda', ['title' => 'Dashboard']);
})->name('beranda');

Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');

Route::get('/simpanan', function () {
    return view('simpanan');
})->name('simpanan');

Route::get('/pinjaman', function () {
    return view('pinjaman');
})->name('pinjaman');

Route::get('/transaksi', function () {
    return view('transaksi');
})->name('transaksi');

Route::get('/loginn', function () {
    return view('loginn');
})->name('login');
Route::post('/loginn', [AuthController::class, 'login']);
Route::post('/beranda', [BerandaController::class, 'index']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
