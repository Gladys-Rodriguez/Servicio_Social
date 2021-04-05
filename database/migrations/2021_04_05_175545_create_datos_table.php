<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 30)->notnull();
            $table->string('ap_paterno', 30)->notnull();
            $table->string('ap_materno', 30)->notnull();
            $table->string('email')->unique();
            $table->string('telefono');
            $table->string('celular');
            $table->timestamp('email_verified_at')->nullable();
            $table->bigInteger('id_direcciones')->unsigned()->notnull();
            $table->timestamps();

            $table->foreign('id_direcciones')->references('id')->on('direccions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos');
    }
}
