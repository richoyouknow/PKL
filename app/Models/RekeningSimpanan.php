<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RekeningSimpanan extends Model
{
    protected $table = 'rekening_simpanan';

    protected $fillable = [
        'anggota_id',
        'no_rekening',
        'produk_simpanan',
        'tanggal_daftar',
        'saldo_terakhir',
        'tanggal_transaksi_terakhir',
        'status'
    ];

    /* ================= RELASI ================= */

    // Rekening simpanan milik satu anggota
    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'anggota_id');
    }

    // Rekening simpanan punya banyak transaksi
    public function transaksi()
    {
        return $this->hasMany(TransaksiSimpanan::class, 'rekening_id');
    }
}
