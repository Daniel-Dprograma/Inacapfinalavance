<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialDeConversacionTable extends Migration
{
    public function up()
    {
        Schema::create('historial_de_conversacion', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('usuarios');
            $table->dateTime('fecha_hora');
            $table->string('mensaje_usuario', 255);
            $table->string('respuesta_bot', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('historial_de_conversacion');
    }
}
