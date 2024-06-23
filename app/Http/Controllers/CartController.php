<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    # Método para mostrar los productos en el carrito
    public function index()
    {
        # Obtener productos en el carrito
        return view('cart.index');
    }

    # Método para actualizar el carrito
    public function update(Request $request)
    {
        # Lógica para actualizar el carrito
    }
}