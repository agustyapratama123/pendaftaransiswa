<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiUsbnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_usbn', function (Blueprint $table) {
            $table->id();
            $table->string('pendidikan_agama');
            $table->string('pkn');
            $table->string('bahasa_indonesia');
            $table->string('bahasa_inggris');
            $table->string('matematika');
            $table->string('ipa');
            $table->string('ips');
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
        Schema::dropIfExists('nilai_usbn');
    }
}
