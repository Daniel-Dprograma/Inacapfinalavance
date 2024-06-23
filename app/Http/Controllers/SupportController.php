<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportController extends Controller
{
    # Método para mostrar las opciones de soporte al cliente
    public function index()
    {
        # Mostrar opciones de soporte al cliente
        return view('support.index');
    }

    # Método para enviar una solicitud de soporte
    public function send(Request $request)
    {
        # Lógica para enviar solicitud de soporte
    }
}