<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    # Método para mostrar la página de inicio
    public function index()
    {
        # Código para obtener productos destacados, promociones, etc.
        return view('home');
    }
}