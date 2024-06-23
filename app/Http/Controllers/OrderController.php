<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    # Método para mostrar la confirmación de la orden
    public function confirmation()
    {
        # Mostrar confirmación de la orden
        return view('order.confirmation');
    }
}