<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimpananController;
use App\Http\Controllers\PinjamanController;
use App\Http\Controllers\TransaksiController;

Route::get('/', function () {
    session()->forget('show_login_popup');
    return view('beranda', ['title' => 'Dashboard']);
})->name('beranda');


Route::middleware('login.popup')->group(function () {
    Route::get('/simpanan', [SimpananController::class, 'index'])->name('simpanan');
    Route::get('/pinjaman', [PinjamanController::class, 'index'])->name('pinjaman');
     Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi');
});
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/loginn', function () {
    return view('loginn');
})->name('login');
Route::post('/loginn', [AuthController::class, 'login']);
Route::match(['get','post'], '/beranda', [BerandaController::class, 'index']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
