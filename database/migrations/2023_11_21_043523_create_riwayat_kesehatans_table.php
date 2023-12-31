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
        Schema::create('riwayat_kesehatans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_pemeriksaan');
            $table->text('deskripsi');
            $table->foreignId('id_ternak');
            $table->foreignId('id_pemeriksa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_kesehatans');
    }
};
