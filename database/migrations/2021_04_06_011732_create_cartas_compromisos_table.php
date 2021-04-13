<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartasCompromisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartas_compromisos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_carta');
            $table->string('file');
            $table->boolean('estado');
            $table->text('observaciones');
            $table->bigInteger('id_alumnos')->unsigned()->notnull();
            $table->timestamps();

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
        Schema::dropIfExists('cartas_compromisos');
    }
}
