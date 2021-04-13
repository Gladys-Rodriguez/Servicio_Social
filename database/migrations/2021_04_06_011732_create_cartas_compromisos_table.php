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
            $table->bigInteger('id_cartas_compromisos')->unsigned()->notnull();
            $table->string('nombre_carta');
            $table->string('file');
            $table->boolean('estado');
            $table->text('observaciones');
            $table->bigInteger('id_alumnos')->unsigned()->notnull();
            $table->text('tipo_doc');
            $table->timestamps();

            $table->primary('id_cartas_compromisos');
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
        Schema::dropIfExists('cartas_compromisos');
    }
}
