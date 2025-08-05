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
        Schema::create('nilais', function (Blueprint $table) {
            $table->id('id_nilai');
            $table->string('tugas');
            $table->string('uts');
            $table->string('uas');
            $table->string('nilai_akhir');
            $table->foreignId('id_mahasiswa')->references('id')->on('penggunas')->onDelete('cascade');
            $table->foreignId('id_mk')->references('id')->on('mata_kuliahs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilais');
    }
};
