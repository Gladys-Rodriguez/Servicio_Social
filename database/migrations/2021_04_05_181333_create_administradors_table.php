<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministradorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administradors', function (Blueprint $table) {
            $table->bigInteger('id_administradors')->unsigned()->notnull();
            $table->string('descripcion')->notnull();
            $table->bigInteger('id_datos')->unsigned()->notnull();
            $table->bigInteger('id_usuarios')->unsigned()->notnull();
            $table->timestamps();

            $table->primary('id_administradors');
            $table->foreign('id_datos')->references('id_datos')->on('datos')->onDelete('cascade');
            $table->foreign('id_usuarios')->references('id_usuarios')->on('usuarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administradors');
    }
}
