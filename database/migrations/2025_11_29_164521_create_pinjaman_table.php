<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pinjaman', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->decimal('nominal', 12, 2);
            $table->integer('tenor');
            $table->decimal('bunga', 5, 2)->default(2);
            $table->enum('status', ['pending','disetujui','ditolak','lunas'])->default('pending');
            $table->date('tanggal_pengajuan');
            $table->date('tanggal_acc')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pinjaman');
    }
};
