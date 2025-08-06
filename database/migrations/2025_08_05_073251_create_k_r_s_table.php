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
        Schema::create('k_r_s', function (Blueprint $table) {
            $table->id('id_krs');
            $table->foreignId(column: 'id_mahasiswa')->references('id_mahasiswa')->on('students')->onDelete('cascade');
            $table->string('tahun_akademik');
            $table->enum('status', ['disetujui', 'ditolak', 'pending'])->default('pending');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('k_r_s');
    }
};
