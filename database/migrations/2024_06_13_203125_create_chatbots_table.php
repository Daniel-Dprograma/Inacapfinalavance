<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatbotsTable extends Migration
{
    public function up()
    {
        Schema::create('chatbots', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('descripcion', 255)->nullable();
            $table->string('estado', 50);
            $table->string('idioma', 50);
            $table->dateTime('fecha_actualizacion');
            $table->string('version', 255);
            $table->string('integracion', 255)->nullable();
            $table->string('capacidades', 255)->nullable();
            $table->string('terminos_servicios', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('chatbots');
    }
}
