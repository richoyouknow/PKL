<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransaksiSimpanan extends Model
{
    protected $table = 'transaksi_simpanan';

    protected $fillable = [
        'rekening_id',
        'no_transaksi',
        'tanggal',
        'kode_transaksi',
        'keterangan',
        'debit',
        'kredit',
        'saldo',
        'petugas',
        'user_input'
    ];

    /* ================= RELASI ================= */

    // Transaksi milik satu rekening simpanan
    public function rekening()
    {
        return $this->belongsTo(RekeningSimpanan::class, 'rekening_id');
    }
}
