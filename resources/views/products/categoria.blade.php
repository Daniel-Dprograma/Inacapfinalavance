@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Productos en {{ $categoria->nombre }}</h1>
    <div class="row">
        @foreach($productos as $producto)
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/'.$producto->imagen) }}" class="card-img-top" alt="{{ $producto->nombre }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $producto->nombre }}</h5>
                    <p class="card-text">{{ $producto->descripcion }}</p>
                    <p class="card-text">{{ $producto->precio }}</p>
                    <a href="#" class="btn btn-primary">Agregar al Carrito</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection