<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilOrtuSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil_ortu_siswa', function (Blueprint $table) {
            $table->id();
            $table->string('namaayah');
            $table->string('namaibu');
            $table->string('namawali');
            $table->string('pendidikanayah');
            $table->string('pendidikanibu');
            $table->string('pendidikanwali');
            $table->string('pekerjaanayah');
            $table->string('pekerjaanibu');
            $table->string('pekerjaanwali');
            $table->string('penghasilanayah');
            $table->string('penghasilanibu');
            $table->string('penghasilanwali');
            $table->string('nohpayah');
            $table->string('nohpibu');
            $table->string('nohpwali');
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
        Schema::dropIfExists('_profil_ortu_siswa');
    }
}
