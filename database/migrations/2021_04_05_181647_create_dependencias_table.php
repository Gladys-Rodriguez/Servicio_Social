<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDependenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependencias', function (Blueprint $table) {
            $table->increments('id_dependencias')->unsigned()->notnull();
            $table->string('nombre_depen')->notnull();
            $table->string('nom_responsable',30)->notnull();
            $table->string('ap_responsable',30)->notnull();
            $table->string('am_responsable',30)->notnull();
            $table->string('telefono')->notnull();
            $table->string('email_responsable');
            $table->unsignedInteger('id_direcciones')->unsigned()->notnull();
            $table->timestamps();


            $table->foreign('id_direcciones')->references('id_direccions')->on('direccions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dependencias');
    }
}
