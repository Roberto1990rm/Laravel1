@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Cerveza</h2>
    
    <form action="{{ route('cervezas.update', $cerveza->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $cerveza->nombre }}" required>
        </div>

        <div class="mb-3">
            <label for="graduacion" class="form-label">Graduación (%)</label>
            <input type="number" step="0.1" class="form-control" id="graduacion" name="graduacion" value="{{ $cerveza->graduacion }}" required>
        </div>

        <div class="mb-3">
            <label for="origen" class="form-label">Origen</label>
            <input type="text" class="form-control" id="origen" name="origen" value="{{ $cerveza->origen }}" required>
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">Precio ($)</label>
            <input type="number" step="0.01" class="form-control" id="precio" name="precio" value="{{ $cerveza->precio }}" required>
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto">
            @if ($cerveza->foto)
                <img src="{{ asset('storage/' . $cerveza->foto) }}" alt="Foto de {{ $cerveza->nombre }}" width="100">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
