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
        Schema::create('partisipasi_alumnis', function (Blueprint $table) {
            $table->id('id_partisipasi');
            $table->enum('status_kehadiran', ['Hadir', 'Tidak Hadir']);
            $table->foreignId('id_alumni')->references('id_alumni')->on('alumnis')->onDelete('cascade');
            $table->foreignId('id_event')->references('id_event')->on('event_alumnis')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partisipasi_alumnis');
    }
};
