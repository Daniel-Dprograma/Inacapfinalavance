<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chatbot extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function intenciones()
    {
        return $this->hasMany(IntencionDeChatbot::class);
    }
}
