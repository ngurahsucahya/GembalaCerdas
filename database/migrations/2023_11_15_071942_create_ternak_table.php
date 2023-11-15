<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('ternak', function (Blueprint $table) {
            $table->id();
            $table->string('rfid', 50)->nullable();
            $table->string('nama_ternak', 255)->unique();
            $table->enum('rasa', ['Garut','Ekor Gemuk','Ekor Tipis','Merio','Suffolk','Texel','Domer','Dorper','Corriedele','Batur','Barbados Blackbelly','Compass Agrinak'])->nullable();
            $table->enum('jenis_kelamin', ['Jantan', 'Betina']);
            $table->date('tanggal_lahir');
            $table->decimal('bobot_badan', 5, 2)->nullable();
            $table->decimal('bobot_lahir', 5, 2)->nullable(); 
            $table->text('deskripsi_fenotip')->nullable();
            $table->enum('status', ['Pejantan', 'Induk', 'Anak'])->default('Anak');       
        });
    }

    public function down()
    {
        Schema::dropIfExists('ternak');
    }
};