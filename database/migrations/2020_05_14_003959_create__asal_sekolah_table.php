<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsalSekolahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asal_sekolah', function (Blueprint $table) {
            $table->id();
            $table->string('npsn');
            $table->string('nama');
            $table->string('alamat');
            $table->string('tahunlulus');
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
        Schema::dropIfExists('_asal_sekolah');
    }
}
