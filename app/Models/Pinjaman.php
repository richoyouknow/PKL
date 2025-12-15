<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model
{
    protected $table = 'pinjaman';

    protected $fillable = [
        'anggota_id',
        'no_pinjaman',
        'tanggal_pinjaman',
        'jumlah_pinjaman',
        'tenor',
        'bunga_persen',
        'bunga_flat',
        'angsuran_pokok',
        'angsuran_bunga',
        'total_angsuran',
        'saldo_pinjaman',
        'status',
        'keterangan',
        'petugas'
    ];

    /* ================= RELASI ================= */

    // Pinjaman milik satu anggota
    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'anggota_id');
    }

    // Pinjaman punya banyak angsuran
    public function angsuran()
    {
        return $this->hasMany(AngsuranPinjaman::class, 'pinjaman_id');
    }

    // Pinjaman punya banyak transaksi
    public function transaksi()
    {
        return $this->hasMany(TransaksiPinjaman::class, 'pinjaman_id');
    }
}
