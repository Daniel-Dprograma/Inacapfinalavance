@extends('layouts.app')

@section('content')
    <h1>Editar Producto</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="{{ $product->name }}">
        <button type="submit">Actualizar</button>
    </form>
@endsection