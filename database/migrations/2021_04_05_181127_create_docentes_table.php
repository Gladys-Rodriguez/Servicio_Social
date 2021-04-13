<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            $table->string('academia');
            $table->bigInteger('id_datos')->unsigned()->notnull();
            $table->bigInteger('id_usuarios')->unsigned()->notnull();
            $table->timestamps();

            $table->foreign('id_datos')->references('id')->on('datos')->onDelete('cascade');
            $table->foreign('id_usuarios')->references('id')->on('usuarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docentes');
    }
}
