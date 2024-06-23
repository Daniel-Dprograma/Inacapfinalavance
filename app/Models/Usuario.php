<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'email', 'password'];

    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }

    public function direcciones()
    {
        return $this->hasMany(DireccionDeEnvio::class);
    }

    public function preferencias()
    {
        return $this->hasOne(PreferenciaDeUsuario::class);
    }
}
