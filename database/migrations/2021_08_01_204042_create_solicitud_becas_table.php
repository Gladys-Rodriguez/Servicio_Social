<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudBecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_becas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('id_alumnos')->unsigned()->notnull();
            $table->unsignedInteger('id_expediente_becas')->unsigned()->notnull();
            $table->boolean('validacion')->default(false);
            $table->timestamps();
            
            $table->foreign('id_alumnos')->references('id_alumnos')->on('alumnos')->onDelete('cascade');
            $table->foreign('id_expediente_becas')->references('id_expediente_becas')->on('expediente_becas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitud_becas');
    }
}
