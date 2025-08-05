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
        Schema::create('presensis', function (Blueprint $table) {
            $table->id('id_presensi');
            $table->date('tanggal')->nullable();
            $table->enum('jenis', ['Hadir', 'Izin', 'Sakit', 'Tidak Hadir'])->default('Hadir');
            $table->foreignId('id_mahasiswa')->references('id_mahasiswa')->on('students')->onDelete('cascade');
            $table->foreignId('id_jadwal')->references('id_jadwal')->on('jadwals')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presensis');
    }
};
