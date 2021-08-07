<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('docente_id')->index('docente_id');
            $table->unsignedBigInteger('empresa_id')->index('empresa_id');
            $table->dateTime('fecha_visita')->nullable();
            $table->string('observaciones')->nullable();
            $table->unsignedBigInteger('visita_estado_id')->index('visita_estado_id');
            $table->timestamps();

            $table->foreign('docente_id')->references('id')->on('docentes')->onDelete('cascade');
            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade');
            $table->foreign('visita_estado_id')->references('id')->on('visita_estados')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitas');
    }
}
