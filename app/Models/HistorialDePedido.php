<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialDePedido extends Model
{
    use HasFactory;

    protected $fillable = ['pedido_id', 'estado_anterior', 'estado_nuevo', 'fecha_cambio'];

    public function pedido()
    {
        return $this->belongsTo(Pedido::class);
    }
}
