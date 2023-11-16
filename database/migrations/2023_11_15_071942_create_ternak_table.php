<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('ternaks', function (Blueprint $table) {
            $table->id();
            $table->string('rfid', 50)->nullable();
            $table->string('nama_ternak', 255)->unique();
            $table->enum('ras', ['Garut','Ekor Gemuk','Ekor Tipis','Merio','Suffolk','Texel','Domer','Dorper','Corriedele','Batur','Barbados Blackbelly','Compass Agrinak'])->nullable();
            $table->enum('jenis_kelamin', ['Jantan', 'Betina']);
            $table->date('tanggal_lahir');
            $table->enum('status_sekarang', ['Pejantan', 'Induk', 'Anak'])->nullable();
            $table->decimal('bobot_badan', 5, 2);
            $table->text('deskripsi_fenotip')->nullable();   
            $table->unsignedBigInteger('statusable_id')->nullable();
            $table->string('statusable_type')->nullable();
            $table->foreignId('id_anak')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ternaks');
    }
};