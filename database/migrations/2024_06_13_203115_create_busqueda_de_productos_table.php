<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusquedaDeProductosTable extends Migration
{
    public function up()
    {
        Schema::create('busqueda_de_productos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('usuarios');
            $table->string('termino_busqueda', 255);
            $table->dateTime('fecha_hora');
            $table->string('resultado_busqueda', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('busqueda_de_productos');
    }
}
