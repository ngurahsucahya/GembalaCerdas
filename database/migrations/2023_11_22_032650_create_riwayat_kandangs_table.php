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
        Schema::create('riwayat_kandangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kandang_id');
            $table->foreignId('ternak_id');
            $table->date('tanggal_pengelompokan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_kandangs');
    }
};
