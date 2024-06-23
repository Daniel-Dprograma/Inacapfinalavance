<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreferenciaDeUsuarioTable extends Migration
{
    public function up()
    {
        Schema::create('preferencia_de_usuario', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('usuarios');
            $table->string('tipo_preferencia', 255);
            $table->string('valor_preferencia', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('preferencia_de_usuario');
    }
}
