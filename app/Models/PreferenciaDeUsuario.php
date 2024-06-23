<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreferenciaDeUsuario extends Model
{
    use HasFactory;

    protected $fillable = ['usuario_id', 'preferencias'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}
