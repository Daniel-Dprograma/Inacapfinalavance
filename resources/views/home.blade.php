@extends('layouts.app')

@section('content')

<!-- Promociones y Recomendaciones -->
<div class="promotions">
    <div class="promotion-section">
        <h2>Promociones</h2>
        <div class="promotion-items">
            <div class="promotion-item">
                <img src="{{ asset('images/promo1.jpg') }}" alt="Promo 1">
                <p>Descuento en ropa de verano</p>
            </div>
            <div class="promotion-item">
                <img src="{{ asset('images/promo2.jpg') }}" alt="Promo 2">
                <p>Ofertas en chaquetas de invierno</p>
            </div>
        </div>
    </div>

    <div class="recommendation-section">
        <h2>Recomendaciones</h2>
        <div class="recommendation-items">
            <div class="recommendation-item">
                <img src="{{ asset('images/recommend1.jpg') }}" alt="Recommend 1">
                <p>Playera casual</p>
            </div>
            <div class="recommendation-item">
                <img src="{{ asset('images/recommend2.jpg') }}" alt="Recommend 2">
                <p>Jeans modernos</p>
            </div>
        </div>
    </div>
</div>
@endsection
