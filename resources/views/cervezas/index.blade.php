@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="titulo-cervezas text-center my-4">Nuestras Cervezas</h1>

    <div class="row justify-content-center"> 
        @foreach($cervezas as $cerveza)
            <div class="col-6 col-md-4 mb-4"> <!-- 🔥 2 columnas en móviles, 3 en escritorio -->
                <div class="card">
                    <img src="{{ asset('storage/' . $cerveza->foto) }}" alt="{{ $cerveza->nombre }}" class="card-img-top">

                    <div class="card-body">
                        <h5 class="card-title">{{ $cerveza->nombre }}</h5>
                        <p class="card-text">{{ $cerveza->descripcion }}</p>
                        <p class="text-muted">Precio: ${{ $cerveza->precio }}</p>
                        <p class="text-muted">Origen: {{ $cerveza->origen }}</p>
                        <p class="text-muted">Graduación: {{ $cerveza->graduacion }}º</p>
                    </div>
                    <a href="{{ route('cervezas.show', $cerveza->id) }}" class="btn btn-primary">Ver más</a>

                    @auth
                    <form action="{{ route('cervezas.destroy', $cerveza->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta cerveza?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm rounded-circle d-flex align-items-center justify-content-center delete-btn">
                            ✖
                        </button>
                    </form>
                    <a href="{{ route('cervezas.edit', $cerveza->id) }}" class="btn btn-warning">Editar</a>

                    @endauth
                        <script>
document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".card");
    let activeCard = null;

    cards.forEach((card) => {
        card.addEventListener("click", function (event) {
            // Evitar que el clic en el botón de eliminar afecte a la tarjeta
            if (event.target.closest("form")) return;

            event.stopPropagation();

            // Si la tarjeta ya está activa, la desactivamos
            if (activeCard === this) {
                this.classList.remove("active");
                activeCard = null;
            } else {
                // Si hay otra tarjeta activa, la cerramos
                if (activeCard) {
                    activeCard.classList.remove("active");
                }
                this.classList.add("active");
                activeCard = this;
            }
        });
    });

    // Si haces clic fuera de una tarjeta, se cierra la activa
    document.addEventListener("click", function () {
        if (activeCard) {
            activeCard.classList.remove("active");
            activeCard = null;
        }
    });
});

                    </script>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection