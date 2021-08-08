<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolsTable extends Migration
{
        public function up()
    {
        Schema::create('rols', function (Blueprint $table) {
            $table->bigInteger('id_rol')->unsigned()->notnull();
            $table -> string('Tipo_rol', 30);
            $table->timestamps();

            $table->primary('id_rol');

        });
    }

    public function down()
    {
        Schema::dropIfExists('rols');
    }
}
