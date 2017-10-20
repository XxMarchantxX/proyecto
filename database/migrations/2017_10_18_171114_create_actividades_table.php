<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nombre_actividad');
          $table->string('cantidad');

          $table->integer('porcentaje');

          $table->timestamps();

          //llaves foraneas
          $table->integer('material_id')->unsigned();
          $table->integer('recinto_id') ->unsigned();
          $table->integer('empleado_id')->unsigned();



          $table->foreign('material_id')->references('id')->on('materiales');
          $table->foreign('recinto_id')->references('id')->on('recintos');
          $table->foreign('empleado_id')->references('id')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividades');
    }
}
