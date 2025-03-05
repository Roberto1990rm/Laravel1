@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-4">Nuestras Cervezas</h1>
    <div class="row">
        @foreach($cervezas as $cerveza)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('storage/' . $cerveza->foto) }}" alt="{{ $cerveza->nombre }}">

                    <div class="card-body">
                        <h5 class="card-title">{{ $cerveza->nombre }}</h5>
                        <p class="card-text">{{ $cerveza->descripcion }}</p>
                        <p class="text-muted">Precio: ${{ $cerveza->precio }}</p>
                        <p class="text-muted">Origen: {{ $cerveza->origen }}</p>
                        <p class="text-muted">Graduación: {{ $cerveza->graduacion }}º</p>
                    </div>
                    @auth
                    <form action="{{ route('cervezas.destroy', $cerveza->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta cerveza?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 30px; height: 30px; padding: 0; position: absolute; top: 10px; right: 10px;">
                            ✖
                        </button>
                    </form>
                    @endauth
                </div>
                
            </div>
           
        @endforeach
    </div>
</div>


@endsection
