<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialDePedidosTable extends Migration
{
    public function up()
    {
        Schema::create('historial_de_pedidos', function (Blueprint $table) {
            $table->foreignId('pedido_id')->constrained('pedidos');
            $table->date('fecha_consulta');
            $table->string('estado_actual', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('historial_de_pedidos');
    }
}

