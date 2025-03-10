@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg" style="max-width: 600px; width: 100%;">
            @if ($cerveza->foto)
                <img src="{{ asset('storage/' . $cerveza->foto) }}" 
                     class="card-img-top img-fluid"
                     style="max-height: 400px; object-fit: contain; background-color: #f8f9fa;"
                     alt="{{ $cerveza->nombre }}">
            @else
                <img src="https://via.placeholder.com/600x400"
                     class="card-img-top img-fluid"
                     style="max-height: 400px; object-fit: contain; background-color: #f8f9fa;"
                     alt="Imagen no disponible">
            @endif

            <div class="card-body text-center">
                <h2 class="card-title">{{ $cerveza->nombre }}</h2>
                <p class="card-text"><strong>Graduación:</strong> {{ $cerveza->graduacion }}%</p>
                <p class="card-text"><strong>Origen:</strong> {{ $cerveza->origen }}</p>
                <p class="card-text"><strong>Precio:</strong> ${{ $cerveza->precio }}</p>
                
                <a href="{{ route('cervezas') }}" class="btn btn-secondary mt-3">Volver</a>
            </div>
        </div>
    </div>
@endsection
