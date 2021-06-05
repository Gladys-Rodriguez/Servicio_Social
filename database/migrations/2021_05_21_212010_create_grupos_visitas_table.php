<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruposVisitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos_visitas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('visita_id')->index('visita_id');
            $table->unsignedBigInteger('grupo_id')->index('grupo_id');
            $table->smallInteger('cantidad_alumnos')->nullable();
            $table->timestamps();

            $table->foreign('visita_id')->references('id')->on('visitas')->onDelete('cascade');
            $table->foreign('grupo_id')->references('id')->on('grupos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupos_visitas');
    }
}
