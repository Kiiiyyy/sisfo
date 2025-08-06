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
        Schema::create('tugas', function (Blueprint $table) {
            $table->id('id_tugas');
            $table->string('judul_tugas');
            $table->string('deskripsi');
            $table->date('tanggal_deadline');
            $table->foreignId('id_dosen')->references('id_dosen')->on('dosens')->onDelete('cascade');
            $table->foreignId('id_mk')->references('id_mk')->on('mata_kuliahs')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tugas');
    }
};
