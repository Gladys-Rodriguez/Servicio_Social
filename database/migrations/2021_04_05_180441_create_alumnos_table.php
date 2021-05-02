<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id_alumnos')->unsigned()->notnull();
            $table->string('carrera',40)->notnull();
            $table->char('semestre',1)->notnull();
            $table->char('grupo', 5)->notnull();
            $table->string('turno', 10)->notnull();
            $table->unsignedInteger('id_datos')->notnull();
            $table->bigInteger('id')->unsigned()->notnull();
            $table->unsignedInteger('id_direccions')->notnull();

            $table->timestamps();



            $table->foreign('id_datos')->references('id_datos')->on('datos')->onDelete('cascade');
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_direccions')->references('id_direccions')->on('direccions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
