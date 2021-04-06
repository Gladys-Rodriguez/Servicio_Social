<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('estado');
            $table->date('fecha_envio');
            $table->text('observaciones');
            $table->bigInteger('id_alumnos')->unsigned()->notnull();
            $table->bigInteger('id_servicios')->unsigned()->notnull();
            $table->timestamps();

            $table->foreign('id_alumnos')->references('id')->on('alumnos')->onDelete('cascade');
            $table->foreign('id_servicios')->references('id')->on('servicios')->onDelete('cascade');
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
