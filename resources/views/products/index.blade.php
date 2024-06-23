@extends('layouts.app')

@section('content')
    <h1>Productos</h1>
    <a href="{{ route('products.create') }}">Crear Producto</a>
    <ul>
        @foreach($products as $product)
            <li>{{ $product->name }} - <a href="{{ route('products.show', $product->id) }}">Ver</a> | <a href="{{ route('products.edit', $product->id) }}">Editar</a> | <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">@csrf @method('DELETE') <button type="submit">Eliminar</button></form></li>
        @endforeach
    </ul>
@endsection