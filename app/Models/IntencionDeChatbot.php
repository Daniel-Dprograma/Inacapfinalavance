<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntencionDeChatbot extends Model
{
    use HasFactory;

    protected $fillable = ['chatbot_id', 'intencion'];

    public function chatbot()
    {
        return $this->belongsTo(Chatbot::class);
    }

    public function respuestas()
    {
        return $this->hasMany(RespuestaDeChatbot::class);
    }
}
