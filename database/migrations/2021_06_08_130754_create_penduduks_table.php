<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('nik');
            $table->string('no_kk');
            $table->string('gender');
            $table->string('no_hp');
            $table->string('status_perkawinan');
            $table->string('place_of_birth');
            $table->string('fcm_token')->nullable();
            $table->date('date_of_birth');
            $table->string('image');
            $table->string('address');
            $table->string('religion');
            $table->string('education');
            $table->string('profession');
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
        Schema::dropIfExists('penduduk');
    }
}
