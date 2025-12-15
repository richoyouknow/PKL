<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransaksiPinjaman extends Model
{
    protected $table = 'transaksi_pinjaman';

    protected $fillable = [
        'pinjaman_id',
        'no_transaksi',
        'tanggal',
        'jenis_transaksi',
        'debit',
        'kredit',
        'saldo',
        'keterangan',
        'petugas'
    ];

    public function pinjaman()
    {
        return $this->belongsTo(Pinjaman::class, 'pinjaman_id');
    }
}
