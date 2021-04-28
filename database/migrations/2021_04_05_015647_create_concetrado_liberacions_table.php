<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConcetradoLiberacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concetrado_liberacions', function (Blueprint $table) {
            $table->bigInteger('id_concentrados_liberacions')->unsigned()->notnull();
            $table->string('nombre');
            $table->unsignedBigInteger('usuario');

            $table->foreign('usuario')->references('id_usuarios')->on('usuarios')->onDelete('cascade');
            $table->timestamps();
            $table->primary('id_concentrados_liberacions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('concetrado_liberacions');
    }
}
