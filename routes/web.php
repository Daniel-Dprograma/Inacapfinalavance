<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChatbotController;


# Ruta para el Chatbot
Route::post('/chatbot', [ChatbotController::class, 'handle'])->name('chatbot.handle');

# Ruta para la página de inicio
Route::get('/', [HomeController::class, 'index'])->name('home');

# Rutas para registro de usuario
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

# Rutas para inicio de sesión
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

# Rutas protegidas para usuarios autenticados
Route::middleware('auth')->group(function () {
    # Ruta para el perfil de usuario
    Route::get('/profile', [UserProfileController::class, 'index'])->name('profile');
    Route::post('/profile', [UserProfileController::class, 'update']);

    # Rutas para productos
    Route::get('/productos', [ProductController::class, 'index'])->name('productos.index');
    Route::get('/productos/{id}', [ProductController::class, 'show'])->name('productos.show');
    Route::resource('products', ProductController::class);

    # Rutas para el carrito de compras
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart', [CartController::class, 'update']);

    # Rutas para el proceso de checkout
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::post('/checkout', [CheckoutController::class, 'process']);

    # Ruta para la confirmación del pedido
    Route::get('/order/confirmation', [OrderController::class, 'confirmation'])->name('order.confirmation');

    # Rutas para soporte al cliente
    Route::get('/support', [SupportController::class, 'index'])->name('support.index');
    Route::post('/support', [SupportController::class, 'send']);
});

# Ruta para la búsqueda de productos
Route::get('/buscar', [ProductController::class, 'search'])->name('productos.search');
Route::get('/categorias/{categoriaId}', [ProductController::class, 'byCategory'])->name('productos.categoria');

# Rutas protegidas para administradores
Route::middleware('admin')->group(function () {
    # Ruta para el dashboard del administrador
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    # Rutas para gestionar productos, usuarios y pedidos
    Route::post('/admin/products', [AdminController::class, 'updateProducts']);
    Route::post('/admin/users', [AdminController::class, 'manageUsers']);
    Route::post('/admin/orders', [AdminController::class, 'manageOrders']);
});

# Incluir las rutas de autenticación de Laravel Breeze
require __DIR__.'/auth.php';