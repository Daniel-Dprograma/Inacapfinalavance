<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DireccionDeEnvio extends Model
{
    use HasFactory;

    protected $fillable = ['usuario_id', 'direccion', 'ciudad', 'pais', 'codigo_postal'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}
