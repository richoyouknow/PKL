<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PinjamanController extends Controller
{
    /**
     * Tampilkan halaman utama pinjaman
     */
    public function index()
    {
        // Jika kamu ingin mengambil data pinjaman dari database,
        // tambahkan model Pinjaman disini lalu ambil datanya.

        return view('pinjaman');
    }

    /**
     * Tampilkan form pengajuan pinjaman
     */
    public function create()
    {
        return view('pinjaman.create');
    }

    /**
     * Simpan data pinjaman
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

        return redirect()->route('pinjaman')->with('success', 'Pengajuan pinjaman berhasil dikirim!');
    }

    /**
     * Detail pinjaman tertentu
     */
    public function show($id)
    {
        // $pinjaman = Pinjaman::findOrFail($id);
        return view('pinjaman.show', compact('id'));
    }
}
