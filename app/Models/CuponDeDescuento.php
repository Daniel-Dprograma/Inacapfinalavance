<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuponDeDescuento extends Model
{
    use HasFactory;

    protected $fillable = ['codigo', 'descuento', 'fecha_expiracion'];

    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class);
    }
}
