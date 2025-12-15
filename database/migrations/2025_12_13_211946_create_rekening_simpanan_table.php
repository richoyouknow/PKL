<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rekening_simpanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('anggota_id')->constrained('anggota')->onDelete('cascade');

            $table->string('no_rekening', 30)->unique();
            $table->enum('produk_simpanan', [
                'Simpanan Wajib',
                'Simpanan Pokok',
                'Simpanan Sukarela'
            ]);
            $table->date('tanggal_daftar');
            $table->decimal('saldo_terakhir', 15, 2)->default(0);
            $table->date('tanggal_transaksi_terakhir')->nullable();

            $table->enum('status', ['Aktif', 'Tutup'])->default('Aktif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekening_simpanan');
    }
};
