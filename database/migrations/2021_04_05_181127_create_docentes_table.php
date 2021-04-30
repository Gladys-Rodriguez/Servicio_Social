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
            $table->increments('id_docentes')->unsigned()->notnull();
            $table->string('academia');
            $table->unsignedInteger('id_datos')->unsigned()->notnull();
            $table->bigInteger('id_usuarios')->unsigned()->notnull();
            $table->timestamps();


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
        Schema::dropIfExists('docentes');
    }
}
