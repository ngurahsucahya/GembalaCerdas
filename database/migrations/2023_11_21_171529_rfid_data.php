<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('rfid_data', function (Blueprint $table) {
            $table->id();
            $table->string('rfid');
            $table->string('nama');
            $table->string('tempat');
            $table->timestamps();
        });

        // Optionally, you can seed initial data in the table here if needed.
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('rfid_data');
    }
};
