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
        Schema::create('tugas_mahasiswas', function (Blueprint $table) {
            $table->id('id_tugas_mahasiswa');
            $table->text('file_tugas');
            $table->date('tanggal_upload');
            $table->integer('nilai')->nullable();
            $table->foreignId('id_tugas')->references('id_tugas')->on('tugas')->onDelete('cascade');
            $table->foreignId('id_mahasiswa')->references('id')->on('penggunas')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tugas_mahasiswas');
    }
};
