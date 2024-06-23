@extends('layouts.app')

@section('content')
    <h1>Crear Producto</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name">
        <button type="submit">Crear</button>
    </form>
@endsection