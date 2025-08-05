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
        Schema::create('keuangans', function (Blueprint $table) {
            $table->id('id_keuangan');
            $table->string('jumlah_tagihan');
            $table->enum('status_pembayaran', ['Lunas', 'Belum Lunas']);
            $table->timestamp('tanggal_pembayaran');
            $table->foreignId('id_mahasiswa')->references('id_mahasiswa')->on('students')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keuangans');
    }
};
