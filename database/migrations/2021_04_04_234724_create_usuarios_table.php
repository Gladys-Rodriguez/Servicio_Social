<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigInteger('id_usuarios')->unsigned()->notnull();
            $table->string('email')->notnull()->unique();
            $table->string('password')->index();
            $table->timestamps();
            $table->bigInteger('id_rol')->unsigned()->notnull();


            $table->primary('id_usuarios');
            $table->foreign('id_rol')->references('id_rol')->on('rols')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
