<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionDeEnvioTable extends Migration
{
    public function up()
    {
        Schema::create('direccion_de_envio', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('usuarios');
            $table->string('calle', 255);
            $table->string('numero_calle', 255);
            $table->string('codigo_postal', 255);
            $table->string('ciudad', 255);
            $table->string('pais', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('direccion_de_envio');
    }
}
