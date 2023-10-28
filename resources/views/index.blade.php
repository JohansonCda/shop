<!DOCTYPE html>
<html>
<head>
    <title>Tienda en línea</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <div class="header">
        <h1>MerColombia</h1>
        <p>¡Descubre nuestras ofertas especiales!</p>
    </div>
    <div class="container">
        <div class="slider-container">
            <div class="slider">
                <div class="slide"><img src="{{ asset('img/pera.jpg') }}" alt="Slide 1"></div>
                <div class="slide"><img src="{{ asset('img/manzana.jpg') }}" alt="Slide 2"></div>
                <div class="slide"><img src="{{ asset('img/piña.jpg') }}" alt="Slide 3"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <p>
            Bienvenido a MerColombia, 
             tu destino en línea para descubrir una experiencia de compra excepcional.
            Aquí en MerColombia, entendemos que el comercio electrónico ha transformado la manera en que compramos,
            y hemos estado a la vanguardia de esta revolución en Colombia. Nuestra tienda web es mucho más que solo una plataforma de compras;
            es un destino digital que te brinda comodidad, diversidad y confiabilidad en cada paso de tu viaje de compra.
        </p>
    </div>

    <div class="container">
        <section>
            <h2>Productos</h2>
            @include('Product.index', ['product' => $products])
        </section>
    </div>
    <div class="footer">
        <p>Todos los derechos reservados a MerColombia &copy; 2023</p>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
