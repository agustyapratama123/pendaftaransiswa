<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil_siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nis');
            $table->string('nisn');
            $table->string('nik');
            $table->string('namalengkap');
            $table->string('jeniskelamin');
            $table->string('tempatlahir');
            $table->string('tanggallahir');
            $table->string('agama');
            $table->text('alamat');
            $table->text('nohp');
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
        Schema::dropIfExists('_profil_siswa');
    }
}
