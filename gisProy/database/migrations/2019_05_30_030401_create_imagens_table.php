<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('imagen')->unsigned()->nullable();
        });
        Schema::table('micros', function (Blueprint $table) {
            $table->string('imagen')->unsigned()->nullable();
        });
        Schema::table('ubicacions', function (Blueprint $table) {
            $table->integer('ruta_id')->unsigned()->nullable();
            $table->foreign('ruta_id')->references('id')->on('rutas')->onDelete('cascade')
                ->onUpdate('cascade');
        }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('imagens');
    }
}
