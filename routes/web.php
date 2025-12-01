<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.master', ['title' => 'Dashboard']);
})->name('master');

Route::get('/simpanan', function () {
    return view('simpanan');
})->name('simpanan');

Route::get('/pinjaman', function () {
    return view('pinjaman');
})->name('pinjaman');
