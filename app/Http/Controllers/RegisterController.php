<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    # Método para mostrar el formulario de registro
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    # Método para registrar un nuevo usuario
    public function register(Request $request)
    {
        # Lógica para registrar un nuevo usuario
    }
}