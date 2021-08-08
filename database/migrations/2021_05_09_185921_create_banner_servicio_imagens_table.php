<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannerServicioImagensTable extends Migration
{

    public function up()
    {
        Schema::create('banner_servicio_imagens', function (Blueprint $table) {
            $table->id();
            $table->string('ruta');
            $table->boolean('estado');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('banner_servicio_imagens');
    }
}
