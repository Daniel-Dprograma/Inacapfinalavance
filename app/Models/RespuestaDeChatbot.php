<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RespuestaDeChatbot extends Model
{
    use HasFactory;

    protected $fillable = ['intencion_id', 'respuesta'];

    public function intencion()
    {
        return $this->belongsTo(IntencionDeChatbot::class);
    }
}
