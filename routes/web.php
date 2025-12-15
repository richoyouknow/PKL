<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimpananController;
use App\Http\Controllers\PinjamanController;
use App\Http\Controllers\TransaksiController;

Route::get('/', function () {
    return view('beranda', ['title' => 'Dashboard']);
})->name('beranda');


Route::middleware('auth')->group(function () {
    Route::get('/simpanan', [SimpananController::class, 'index'])->name('simpanan');
    Route::get('/pinjaman', [PinjamanController::class, 'index'])->name('pinjaman');
     Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi');
});

route::get ('/profile', function () {
    return view('profile', ['title' => 'Profile']);
})->name('profile');

route::get ('/editprofile', function () {
    return view('editprofile', ['title' => 'Edit Profile']);
})->name('profile.edit');

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/loginn', function () {
    return view('loginn');
})->name('login');
Route::post('/loginn', [AuthController::class, 'login']);
Route::get('/anggota', function () {
    return view('anggota');
});
Route::group(['middleware' => ['auth', 'check_role:admin']], function(){
Route::get('/beranda', [BerandaController::class, 'index']);
});
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
