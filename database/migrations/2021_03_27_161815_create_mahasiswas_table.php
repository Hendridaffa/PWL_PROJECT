<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id('Nim');
            $table->string('Nama', 50);
            $table->text('Gambar');
            $table->string('Kelas', 10);
            $table->string('Jurusan', 50);
            $table->string('No_Handphone', 14);
            $table->string('Email');
            $table->string('Tanggal_lahir', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
}
