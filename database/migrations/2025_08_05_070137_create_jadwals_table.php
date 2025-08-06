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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id('id_jadwal');
            $table->string('hari');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->string('ruang_kelas');
            $table->foreignId('id_mk')->references('id_mk')->on('mata_kuliahs')->onDelete('cascade');
            $table->foreignId('id_dosen')->references('id_dosen')->on('dosens')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};
