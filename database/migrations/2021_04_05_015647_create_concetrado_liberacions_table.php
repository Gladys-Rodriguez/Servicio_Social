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
            $table->id()->unique()->notnull();
            $table->string('nombre');
            $table->unsignedBigInteger('usuario');

            $table->foreign('usuario')->references('id')->on('usuarios')->onDelete('cascade');
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
        Schema::dropIfExists('concetrado_liberacions');
    }
}
