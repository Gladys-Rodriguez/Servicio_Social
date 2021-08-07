<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpedienteBecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expediente_becas', function (Blueprint $table) {
            $table->increments('id_expediente_becas')->unsigned()->notnull();
            $table->string('Nombre_beca');
            $table->date('Fecha_Inicio');
            $table->date('Fecha_Fin');
            $table->unsignedInteger('monto');
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
        Schema::dropIfExists('expediente_becas');
    }
}
