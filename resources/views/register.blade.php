@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Registro</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Campos del formulario de registro -->
            <button type="submit">Registrarse</button>
        </form>
    </div>
@endsection