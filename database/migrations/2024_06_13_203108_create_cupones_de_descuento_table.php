<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuponesDeDescuentoTable extends Migration
{
    public function up()
    {
        Schema::create('cupones_de_descuento', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 255)->unique();
            $table->decimal('descuento', 4, 2);
            $table->date('fecha_vencimiento');
            $table->string('uso_unico', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cupones_de_descuento');
    }
}
