<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AngsuranPinjaman extends Model
{
    protected $table = 'angsuran_pinjaman';

    protected $fillable = [
        'pinjaman_id',
        'angsuran_ke',
        'tanggal_jatuh_tempo',
        'tanggal_bayar',
        'pokok',
        'bunga',
        'denda',
        'total',
        'status',
        'petugas'
    ];

    public function pinjaman()
    {
        return $this->belongsTo(Pinjaman::class, 'pinjaman_id');
    }
}
