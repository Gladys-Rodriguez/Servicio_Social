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
            $table->id();
            $table->date('fecha_inicio')->notnull();
            $table->date('fecha_termino')->notnull();
            $table->date('fecha_inscripcion')->notnull();
            $table->bigInteger('id_dependencias')->unsigned()->notnull();
            $table->bigInteger('id_alumnos')->unsigned()->notnull();
            $table->timestamps();

            $table->foreign('id_dependencias')->references('id')->on('dependencias')->onDelete('cascade');
            $table->foreign('id_alumnos')->references('id')->on('alumnos')->onDelete('cascade');
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
