<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Tampilkan halaman utama transaksi
     */
    public function index()
    {
        // Jika kamu ingin mengambil data transaksi dari database,
        // tambahkan model Transaksi disini lalu ambil datanya.

        return view('transaksi');
    }

    /**
     * Tampilkan form pengajuan transaksi
     */
    public function create()
    {
        return view('transaksi.create');
    }

    /**
     * Simpan data transaksi
     */
    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'jumlah' => 'required|numeric',
            'tenor'  => 'required|integer',
        ]);

        // Simpan ke database
        // Pinjaman::create([
        //     'user_id' => auth()->id(),
        //     'jumlah'  => $request->jumlah,
        //     'tenor'   => $request->tenor,
        // ]);

        return redirect()->route('transaksi')->with('success', 'Pengajuan transaksi berhasil dikirim!');
    }

    /**
     * Detail transaksi tertentu
     */
    public function show($id)
    {
        // $pinjaman = Pinjaman::findOrFail($id);
        return view('transaksi.show', compact('id'));
    }
}
