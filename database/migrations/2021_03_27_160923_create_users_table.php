<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->index();
            $table->string('tipo')->nullable();
            //1.Superadmin //2.Admin Servicio Social //3. Admin Becas //4.Admin practicas y visitas //5. alumnos
            $table->string('password')->index();
            $table->bigInteger('rol')->unsigned()->notnull();
            $table->timestamps();

            $table->foreign('rol')->references('id')->on('rols')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
