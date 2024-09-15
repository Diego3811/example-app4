<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechZone - Promociones</title>
    <link href="https://fonts.googleapis.com/css2?family=Commissioner:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

<div class="header">
    <div class="logo-container">
        <div class="logo-background">
            <img src="{{ asset('img/TechZone_Logo_Dark.png') }}" alt="TechZone Logo" class="logo">
        </div>
    </div>
    <div class="nav-links">
        <p><a href="#">Nosotros</a> | <a href="#">Contacto</a> | <a href="#">Blog</a></p>
    </div>
    <div class="header-actions">
        <div class="search-bar">
            <input type="text" placeholder="Buscar...">
        </div>
        <div class="cart">
            <img src="{{ asset('img/cart.png') }}" alt="Carrito de Compras">
        </div>
        <div class="login-register">
            <a href="#" class="login">Inicio de Sesión</a>
            <a href="#" class="register">Registro</a>
        </div>
    </div>
</div>

<div class="main-banner">
    <img src="{{ asset('img/C.png') }}" alt="Banner" class="banner-image">
</div>

<h2 class="featured-products-title">PRODUCTOS DESTACADOS</h2>
<hr class="divider">

<div class="product-section">
    @foreach($products as $product)
    <div class="product-card">
        <img src="{{ asset('img/' . $product->image) }}" alt="{{ $product->name }}">
        <h3>{{ $product->name }}</h3>
        <p class="price">${{ number_format($product->price, 2) }}</p>
        <button class="btn-add-to-cart" data-product-id="{{ $product->id }}">Añadir al carrito</button>
        <button class="view-more" data-product-id="{{ $product->id }}">Ver más</button>
    </div>
    @endforeach
</div>

<footer>
    <p>&copy; 2024 TechZone | Tiendas de marcas | ¿Cómo comprar? | Historial de pedidos | Configurador de PC | Garantías y devoluciones | Preguntas frecuentes | Quiénes somos | Condiciones generales | Aviso de privacidad | ¿Quieres ser proveedor? | Únete a nuestro equipo</p>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Manejo del botón "Añadir al carrito"
        document.querySelectorAll('.btn-add-to-cart').forEach(button => {
            button.addEventListener('click', function() {
                const productId = this.getAttribute('data-product-id');
               
                alert(`Producto ${productId} añadido al carrito.`);
                
            });
        });

        // Manejo del botón "Ver más"
        document.querySelectorAll('.view-more').forEach(button => {
            button.addEventListener('click', function() {
                const productId = this.getAttribute('data-product-id');
                
                window.location.href = `/products/${productId}`;
            });
        });
    });
</script>

</body>
</html>
