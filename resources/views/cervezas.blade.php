@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-4">Nuestras Cervezas</h1>
    <div class="row position-relative">
        @foreach($cervezas as $cerveza)
            <div class="col-md-4 cerveza-card">
                <div class="card">
                    <img src="{{ asset('storage/' . $cerveza->foto) }}" alt="{{ $cerveza->nombre }}">

                    <div class="card-body" style="margin-bottom: -10px;">
                        <h5 class="card-title">{{ $cerveza->nombre }}</h5>
                        <p class="card-text">{{ $cerveza->descripcion }}</p>
                        <p class="text-muted">Graduación: {{ $cerveza->graduacion }}º</p>
                        <p class="text-muted">Precio: ${{ $cerveza->precio }}</p>
                        <p class="text-muted">Origen: {{ $cerveza->origen }}</p>
                        

                        <!-- Botón de eliminar con X -->
                        <form action="{{ route('cervezas.destroy', $cerveza->id) }}" method="POST" onsubmit="return confirmarEliminacion(event)">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger btn-sm rounded-circle d-flex align-items-center justify-content-center position-absolute"
                            style="top: 5px; right: 5px; width: 30px; height: 30px;"
                            data-id="{{ $cerveza->id }}">
                            ✖
                        </button>
                        </form>
                        
                        <script>
                            function confirmarEliminacion(event) {
                                if (!confirm('¿Estás seguro de que deseas eliminar esta cerveza?')) {
                                    event.preventDefault(); // Evita que se envíe el formulario si cancelas
                                }
                            }
                        </script>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Script para expandir la card -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.cerveza-card .card');

    cards.forEach(card => {
        card.addEventListener('click', function() {
            // Remover expansión de cualquier otra card activa
            document.querySelectorAll('.expanded').forEach(expandedCard => {
                expandedCard.classList.remove('expanded');
            });

            // Expandir la card clickeada
            this.classList.add('expanded');
        });
    });

    // Cerrar al hacer clic fuera
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.cerveza-card .card')) {
            document.querySelectorAll('.expanded').forEach(expandedCard => {
                expandedCard.classList.remove('expanded');
            });
        }
    });
});
</script>

<!-- Estilos para la expansión -->
<style>
.cerveza-card {
    transition: transform 0.3s ease-in-out;
    cursor: pointer;
    position: relative;
}

.card {
    transition: all 0.3s ease-in-out;
}

.expanded {
    position: absolute;
    top: 0;
    left: 0;
    width: 100% !important;
    z-index: 10;
    transform: scale(1.1);
    background: white;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    padding: 20px;
}

.delete-btn {
    background: red;
    border: none;
    color: white;
    font-size: 16px;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    position: absolute;
    top: 10px;
    right: 10px;
}
</style>
@endsection
