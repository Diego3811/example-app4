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
    <div class="product-card">
        <img src="{{ asset('img/ZXT-H9-Elite.webp') }}" alt="NZXT H9 Elite">
        <h3>NZXT H9 Elite</h3>
        <p class="price">$2,799.99</p>
        <button>Añadir</button>
        <button class="view-more">Ver más</button>
        
    </div>
    <div class="product-card">
        <img src="{{ asset('img/Monitor-Samsung-Odyssey-G4.jpg') }}" alt="Samsung Odyssey G4 LED">
        <h3>Monitor Samsung Odyssey G4</h3>
        <p class="price">$3,449.99</p>
        <button>Añadir</button>
        <button class="view-more">Ver más</button>
    </div>
    <div class="product-card">
        <img src="{{ asset('img/Laptop-MSI-Raider-GE76HX.webp') }}" alt="MSI Raider GE76HX">
        <h3>Laptop MSI Raider GE76HX</h3>
        <p class="price">$17,799.99</p>
        <button>Añadir</button>
        <button class="view-more">Ver más</button>
        
    </div>
    <div class="product-card">
        <img src="{{ asset('img/Radeon-RX-6600.webp') }}" alt="Radeon RX 6600">
        <h3>Radeon RX 6600</h3>
        <p class="price">$6,967.00</p>
        <button>Añadir</button>
        <button class="view-more">Ver más</button>
    </div>
    <div class="product-card">
        <img src="{{ asset('img/AMD-Ryzen-7-5800X.jpg') }}" alt="New Product">
        <h3>Procesador AMD Ryzen 7 5800X</h3>
        <p class="price">$2999.99</p>
        <button>Añadir</button>
        <button class="view-more">Ver más</button>
    </div>
</div>


</body>
</html>
