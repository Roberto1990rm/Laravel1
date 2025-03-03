@extends('layouts.app')

@section('title', 'Bienvenida a Cervecerías Artesanales')

@section('content')
    <header class="text-center p-5 bg-warning text-white">
        <h1 class="display-4">Bienvenido a la mejor selección de cervezas artesanales 🍻</h1>
        <p class="lead">Descubre sabores únicos y experiencias inolvidables.</p>
    </header>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Nuestra selección</h2>
        <div class="row">
            <!-- Tarjeta de Cerveza 1 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('images/cerveza1.jpg') }}" class="card-img-top" alt="Cerveza">
                    <div class="card-body">
                        <h5 class="card-title">Cerveza Premium</h5>
                        <p class="card-text">Explora una selección exclusiva de cervezas artesanales.</p>
                        <a href="{{ url('/cervezas') }}" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>

            <!-- Tarjeta de Cerveza 2 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('images/cerveza2.jpg') }}" class="card-img-top" alt="Cerveza">
                    <div class="card-body">
                        <h5 class="card-title">Cervecerías Locales</h5>
                        <p class="card-text">Conoce los mejores productores de cerveza artesanal en tu zona.</p>
                        <a href="{{ url('/cervezas') }}" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>

            <!-- Tarjeta de Cerveza 3 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('images/cerveza3.jpg') }}" class="card-img-top" alt="Cerveza">
                    <div class="card-body">
                        <h5 class="card-title">Eventos y Catas</h5>
                        <p class="card-text">Únete a eventos exclusivos y catas de cervezas artesanales.</p>
                        <a href="{{ url('/eventos') }}" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección de Enlace adicional -->
    <div class="text-center mt-5">
        <a href="{{ url('/cervezas') }}" class="btn btn-lg btn-success">Ver toda la selección de cervezas</a>
    </div>
@endsection
