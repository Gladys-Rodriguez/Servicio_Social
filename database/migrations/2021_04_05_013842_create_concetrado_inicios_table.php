<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConcetradoIniciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concetrado_inicios', function (Blueprint $table) {
            $table->increments('id_concentrados_inicios')->unsigned()->notnull();
            $table->string('nombre');
            $table->unsignedBigInteger('usuario');

            $table->foreign('usuario')->references('id_usuarios')->on('usuarios')->onDelete('cascade');
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
        Schema::dropIfExists('concetrado_inicios');
    }
}
