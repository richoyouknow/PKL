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
Schema::create('transaksi_simpanan', function (Blueprint $table) {
    $table->id();

    $table->foreignId('rekening_id')
          ->constrained('rekening_simpanan')
          ->onDelete('cascade');

    $table->string('no_transaksi', 30)->unique();
    $table->date('tanggal');

    $table->enum('kode_transaksi', ['01','02','03','04']);
    $table->string('keterangan');

    $table->decimal('debit', 15, 2)->default(0);
    $table->decimal('kredit', 15, 2)->default(0);
    $table->decimal('saldo', 15, 2);

    $table->string('petugas', 50);
    $table->string('user_input', 50);

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_simpanan');
    }
};
