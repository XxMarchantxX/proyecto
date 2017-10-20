<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->text('comentario');
            $table->integer('porcentaje');


            $table->integer('empleado_id')->unsigned();
            $table->integer('creador_id')->unsigned();
            $table->integer('recinto_id')->unsigned();


            $table->foreign('empleado_id')->references('id')->on('empleados');
            $table->foreign('creador_id')->references('id')->on('users');
            $table->foreign('recinto_id')->references('id')->on('recintos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registros');
    }
}
