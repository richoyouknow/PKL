<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpananController extends Controller
{
    /**
     * Halaman utama simpanan
     */
    public function index()
    {
        // Jika ingin ambil data simpanan user:
        // $simpanan = Simpanan::where('user_id', auth()->id())->get();

        return view('simpanan');
    }

    /**
     * Form tambah simpanan
     */
    public function create()
    {
        return view('simpanan.create');
    }

    /**
     * Simpan data simpanan ke database
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'jumlah' => 'required|numeric|min:1000',
            'keterangan' => 'nullable|string'
        ]);

        // Contoh jika menggunakan model Simpanan
        // Simpanan::create([
        //     'user_id' => auth()->id(),
        //     'jumlah' => $request->jumlah,
        //     'keterangan' => $request->keterangan,
        // ]);

        return redirect()->route('simpanan')->with('success', 'Simpanan berhasil ditambahkan!');
    }

    /**
     * Detail simpanan tertentu
     */
    public function show($id)
    {
        // $simpanan = Simpanan::findOrFail($id);
        return view('simpanan.show', compact('id'));
    }
}
