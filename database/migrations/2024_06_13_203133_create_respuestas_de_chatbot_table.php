<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestaDeChatbotTable extends Migration
{
    public function up()
    {
        Schema::create('respuesta_de_chatbot', function (Blueprint $table) {
            $table->id();
            $table->foreignId('intencion_id')->constrained('intencion_de_chatbot');
            $table->string('texto', 255);
            $table->string('imagen', 255)->nullable();
            $table->string('enlace_producto', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('respuesta_de_chatbot');
    }
}
