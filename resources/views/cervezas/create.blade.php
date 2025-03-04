@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar una nueva cerveza</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('cervezas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="graduacion" class="form-label">Graduación (%)</label>
            <input type="number" name="graduacion" id="graduacion" step="0.1" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" name="precio" id="precio" step="0.01" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="origen" class="form-label">Origen</label>
            <input type="text" name="origen" id="origen" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" name="foto" id="foto" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Guardar Cerveza</button>
    </form>
</div>
@endsection
