<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntencionDeChatbotTable extends Migration
{
    public function up()
    {
        Schema::create('intencion_de_chatbot', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion', 255);
            $table->string('ejemplo_de_frase', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('intencion_de_chatbot');
    }
}
