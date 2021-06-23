<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->increments('id_servicios')->unsigned()->notnull();
            $table->bigInteger('No_registro')->unsigned();
            $table->date('fecha_inicio');
            $table->date('fecha_termino');
            $table->date('fecha_inscripcion');
            $table->unsignedInteger('id_dependencias')->unsigned()->notnull();
            $table->unsignedInteger('id_alumnos')->unsigned()->notnull();
            $table->timestamps();


            $table->foreign('id_dependencias')->references('id_dependencias')->on('dependencias')->onDelete('cascade');
            $table->foreign('id_alumnos')->references('id_alumnos')->on('alumnos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicios');
    }
}
