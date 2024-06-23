<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusquedaDeProducto extends Model
{
    use HasFactory;

    protected $fillable = ['usuario_id', 'producto_id', 'fecha_busqueda'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
