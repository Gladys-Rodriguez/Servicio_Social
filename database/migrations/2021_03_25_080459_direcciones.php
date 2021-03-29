<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Direcciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Direcciones', function(Blueprint $table){

            $table->integer('Id_direccion');
            $table->string('Alcaldia');
            $table->string('Colonia');
            $table->string('Calle');
            $table->string('Num_ext');
            $table->string('Num_int')->nullable();
            $table->integer('CP');

            $table->primary('Id_direccion');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('Direcciones');
    }
}

