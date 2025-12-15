<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->id();

            $table->string('no_registrasi', 30)->unique();
            $table->string('no_anggota', 30)->unique()->nullable();
            

            $table->string('nama', 100);
            $table->text('alamat')->nullable();
            $table->string('no_telepon', 20)->nullable();

            $table->string('grup_wilayah', 50)->nullable();

            $table->string('jenis_identitas', 20)->nullable();
            $table->string('no_identitas', 30)->nullable();
            $table->date('berlaku_sampai')->nullable();

            $table->string('agama', 20)->nullable();

            $table->string('tempat_lahir', 50)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->enum('jenis_kelamin', ['Pria', 'Wanita'])->nullable();

            $table->string('nama_pasangan', 100)->nullable();
            $table->string('pekerjaan', 50)->nullable();
            $table->decimal('pendapatan', 15, 2)->nullable();

            $table->text('alamat_kantor')->nullable();
            $table->text('keterangan')->nullable();

            $table->enum('status_keanggotaan', [
                'Calon Anggota',
                'Nasabah Non Anggota',
                'Anggota'
            ])->default('Calon Anggota');

            $table->boolean('is_pengurus')->default(false);

            $table->string('foto')->nullable();
            $table->string('petugas', 50)->nullable();
            $table->date('tanggal_daftar')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('anggota');
    }
};
