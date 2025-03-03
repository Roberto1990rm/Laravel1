<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cervecerías Artesanales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">🍺 Cervecerías Artesanales</a>
        </div>
    </nav>

    <header class="text-center p-5 bg-warning">
        <h1 class="display-4">Bienvenido a la mejor selección de cervezas artesanales 🍻</h1>
        <p class="lead">Descubre sabores únicos y experiencias inolvidables.</p>
    </header>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/cerveza1.jpg') }}" class="card-img-top" alt="Cerveza">
                    <div class="card-body">
                        <h5 class="card-title">Cervezas Premium</h5>
                        <p class="card-text">Explora una selección exclusiva de cervezas artesanales.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/cerveza1.jpg') }}" class="card-img-top" alt="Cerveza">
                    <div class="card-body">
                        <h5 class="card-title">Nuestras Cervecerías</h5>
                        <p class="card-text">Conoce los mejores productores de cerveza artesanal.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/cerveza1.jpg') }}" class="card-img-top" alt="Cerveza">
                    <div class="card-body">
                        <h5 class="card-title">Eventos y Catas</h5>
                        <p class="card-text">Únete a eventos exclusivos para amantes de la cerveza.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
