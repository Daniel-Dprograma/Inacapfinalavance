<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    # Método para mostrar el resumen de la orden
    public function index()
    {
        # Mostrar resumen de la orden
        return view('checkout.index');
    }

    # Método para procesar la orden de compra
    public function process(Request $request)
    {
        # Procesar la orden de compra
    }
}