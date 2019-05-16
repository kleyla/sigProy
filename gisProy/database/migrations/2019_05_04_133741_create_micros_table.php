<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMicrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('micros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('placa');
            $table->integer('capacidad');
            $table->string('modelo');
            $table->integer('#Interno');
            $table->integer('IdConductor');
            $table->integer('IdPropietario');
            $table->integer('IdRuta');
            $table->foreign('IdRuta')->references('id')->on('rutas');
            $table->foreign('IdConductor')->references('id')->on('conductors');
            $table->foreign('IdPropietario')->references('id')->on('propietarios');
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
        Schema::dropIfExists('micros');
    }
}
