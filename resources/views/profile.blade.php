@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Perfil de Usuario</h1>
        <!-- Mostrar información del perfil -->
        <form method="POST" action="{{ route('profile') }}">
            @csrf
            <!-- Campos para actualizar el perfil -->
            <button type="submit">Actualizar</button>
        </form>
    </div>
@endsection