<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimpananController;
use App\Http\Controllers\PinjamanController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnggotaController;

Route::get('/', function () {
    return view('beranda', ['title' => 'Dashboard']);
})->name('beranda');


Route::middleware('auth')->group(function () {
    Route::get('/simpanan', [SimpananController::class, 'index'])->name('simpanan');
    Route::get('/pinjaman', [PinjamanController::class, 'index'])->name('pinjaman');
     Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi');
});

Route::middleware(['auth', 'check_role:admin,anggota'])->group(function () {
    Route::get('/profile', fn() => view('profile'))->name('profile');
    Route::get('/editprofile', fn() => view('editprofile'))->name('profile.edit');
});


Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/loginn', function () {
    return view('loginn');
})->name('login');
Route::post('/loginn', [AuthController::class, 'login']);
Route::group(['middleware' => ['auth', 'check_role:anggota']], function() {
Route::get('/anggota', [AnggotaController::class, 'index']);
});
Route::group(['middleware' => ['auth', 'check_role:admin']], function() {
Route::get('/admin', [AdminController::class, 'index']);
});
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
