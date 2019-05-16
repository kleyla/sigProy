<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurnoMicrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turno_micros', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_Micro');
            $table->unsignedInteger('id_Turno');
            $table->foreign('id_Micro')->references('id')->on('micros');
            $table->foreign('id_Turno')->references('id')->on('turnos');
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
        Schema::dropIfExists('turno_micros');
    }
}
