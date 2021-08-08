<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosTable extends Migration
{

    public function up()
    {
        Schema::create('datos', function (Blueprint $table) {
            $table->increments('id_datos')->unsigned()->notnull();
            $table->string('nombre', 30)->notnull();
            $table->string('ap_paterno', 30)->notnull();
            $table->string('ap_materno', 30)->notnull();
            $table->string('telefono');
            $table->string('celular');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('datos');
    }
}
