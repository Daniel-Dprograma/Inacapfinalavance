@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Inicio de Sesión</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Campos del formulario de inicio de sesión -->
            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>
@endsection