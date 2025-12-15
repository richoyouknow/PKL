<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';

    protected $fillable = [
        'no_registrasi',
        'no_anggota',
        'no_rekening',
        'nama',
        'alamat',
        'no_telepon',
        'grup_wilayah',
        'jenis_identitas',
        'no_identitas',
        'berlaku_sampai',
        'agama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'nama_pasangan',
        'pekerjaan',
        'pendapatan',
        'alamat_kantor',
        'keterangan',
        'status_keanggotaan',
        'is_pengurus',
        'foto',
        'petugas',
        'tanggal_daftar'
    ];

    /* ================= RELASI ================= */

    // 1 Anggota punya banyak rekening simpanan
    public function rekeningSimpanan()
    {
        return $this->hasMany(RekeningSimpanan::class, 'anggota_id');
    }

    // 1 Anggota bisa punya banyak pinjaman
    public function pinjaman()
    {
        return $this->hasMany(Pinjaman::class, 'anggota_id');
    }
}
