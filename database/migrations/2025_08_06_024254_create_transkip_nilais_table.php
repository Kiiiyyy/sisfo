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
        Schema::create('transkip_nilais', function (Blueprint $table) {
            $table->id("id_transkip");
            $table->float("ipk", 8,2);
            $table->integer('sks_total');
            $table->enum('status_kelulusan', ['lulus','tidak lulus']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transkip_nilais');
    }
};
