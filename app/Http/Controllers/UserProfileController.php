<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    # Método para mostrar el perfil del usuario
    public function index()
    {
        # Obtener información del perfil del usuario
        return view('profile');
    }

    # Método para actualizar el perfil del usuario
    public function update(Request $request)
    {
        # Lógica para actualizar el perfil del usuario
    }
}