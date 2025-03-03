@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-4">Nuestras Cervezas</h1>
    <div class="row">
        @foreach($cervezas as $cerveza)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('images/' . $cerveza->imagen) }}" class="card-img-top" alt="{{ $cerveza->nombre }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $cerveza->nombre }}</h5>
                        <p class="card-text">{{ $cerveza->descripcion }}</p>
                        <p class="text-muted">Precio: ${{ $cerveza->precio }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
