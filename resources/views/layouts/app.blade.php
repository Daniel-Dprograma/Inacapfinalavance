<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Tu Aplicación')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app">
        <div class="header">
            <!-- Logo -->
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </div>

            <!-- Barra de búsqueda -->
            <div class="search-bar">
                <input type="text" placeholder="Buscar...">
            </div>

            <!-- Iconos de Usuario, Carrito, Deseos y Divisas -->
            <div class="user-cart-icons">
                <div class="user-icon">
                    <img src="{{ asset('images/user-icon.png') }}" alt="Usuario">
                    <div class="dropdown-menu">
                        <a href="#">Registrarse/Iniciar sesión</a>
                        <a href="#">Mis pedidos</a>
                        <a href="#">Mis cupones</a>
                        <a href="#">Mis puntos</a>
                        <a href="#">Vistos recientemente</a>
                        <a href="#">Mis notificaciones</a>
                    </div>
                </div>
                <div class="cart-icon">
                    <img src="{{ asset('images/cart-icon.png') }}" alt="Carrito">
                    <div class="dropdown-menu">
                        <p>Carrito vacío</p>
                    </div>
                </div>
                <div class="deseos-icon">
                    <img src="{{ asset('images/deseos-icon.png') }}" alt="Deseos">
                    <div class="dropdown-menu">
                        <p>Lista de deseos vacía</p>
                    </div>
                </div>
                <div class="divisas-icon">
                    <img src="{{ asset('images/divisas-icon.png') }}" alt="Divisas">
                    <div class="dropdown-menu">
                        <select>
                            <option value="clp">CLP / $</option>
                            <option value="usd">USD / $</option>
                            <option value="eur">EUR / €</option>
                            <option value="gbp">GBP / £</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="categories">
            <ul>
                <li><a href="{{ route('productos.index') }}">Categorías</a></li>
                <li><a href="{{ route('productos.categoria', 'Novedades') }}">Novedades</a></li>
                <li><a href="{{ route('productos.categoria', 'Ofertas') }}">Ofertas</a></li>
                <li><a href="{{ route('productos.categoria', 'Ropa de mujer') }}">Ropa de mujer</a></li>
                <li><a href="{{ route('productos.categoria', 'Ropa playera') }}">Ropa playera</a></li>
                <li><a href="{{ route('productos.categoria', 'Niños') }}">Niños</a></li>
                <li><a href="{{ route('productos.categoria', 'Curvy') }}">Curvy</a></li>
                <li><a href="{{ route('productos.categoria', 'Ropa para hombre') }}">Ropa para hombre</a></li>
                <li><a href="{{ route('productos.categoria', 'Joyería y accesorios') }}">Joyería y accesorios</a></li>
                <li><a href="{{ route('productos.categoria', 'Zapatos') }}">Zapatos</a></li>
                <li><a href="{{ route('productos.categoria', 'Ropa interior') }}">Ropa interior</a></li>
                <li><a href="{{ route('productos.categoria', 'Hogar y cocina') }}">Hogar y cocina</a></li>
                <li><a href="{{ route('productos.categoria', 'Belleza y salud') }}">Belleza y salud</a></li>
            </ul>
        </div>

        @yield('content')

        <!-- Chatbot HTML -->
        <div class="chatbot">
            <div class="chatbot-icon">
                <img src="{{ asset('images/chatbot-icon.png') }}" alt="Chatbot">
            </div>
            <div class="chatbot-window">
                <div class="chatbot-messages" id="chatbot-messages"></div>
                <div class="chatbot-input-container">
                    <input type="text" id="chatbot-input" placeholder="Escribe tu mensaje...">
                    <button id="chatbot-send">Enviar</button>
                </div>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/chatbot.js') }}"></script>
    @yield('scripts')
</body>
</html>