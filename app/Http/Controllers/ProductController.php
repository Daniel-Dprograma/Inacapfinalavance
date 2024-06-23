<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class ProductController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('products.index', compact('productos'));
    }

    public function show($id)
    {
        $producto = Producto::findOrFail($id);
        return view('products.show', compact('producto'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $productos = Producto::where('nombre', 'LIKE', "%$query%")->get();
        return view('products.search', compact('productos'));
    }

    public function byCategory($categoriaId)
    {
        $productos = Producto::where('categoria_id', $categoriaId)->get();
        return view('products.index', compact('productos'));
    }
}