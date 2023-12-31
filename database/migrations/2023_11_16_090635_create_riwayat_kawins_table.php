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
        Schema::create('riwayat_kawins', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('tanggal_kawin');
            $table->foreignId('id_induk');
            $table->foreignId('id_pejantan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_kawins');
    }
};
