<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechZone - Nueva Página</title>
    <link rel="stylesheet" href="{{ asset('css/styles3.css') }}">
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
    <a href="#">
        <img src="{{ asset('img/usuario.png') }}" alt="Usuario" class="user-icon">
    </a>
</div>

    </div>
</div>

<div class="product-page">
        <div class="product-images">
            <img src="{{ asset('img/ZXT-H9-Elite.webp') }}" alt="NZXT H1 Blanco" class="main-image">
            <div class="thumbnail-images">
                <img src="{{ asset('img/ZXT-H9-Elite2.webp') }}" alt="Vista lateral">
                <img src="{{ asset('img/ZXT-H9-Elite3.webp') }}" alt="Vista trasera">
                <img src="{{ asset('img/ZXT-H9-Elite4.webp') }}" alt="Vista interior">
            </div>
        </div>
        <div class="product-details">
            <h1>NZXT H9 Elite (Blanco)</h1>
            <p class="price">$3,699.00 <span class="old-price">$3,082.85</span></p>
            <p class="availability">Disponibles: 12</p>
            <div class="quantity">
                <label for="quantity">Cantidad:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
            </div>
            <button class="add-to-cart">Añadir al Carrito</button>
            <div class="product-description">
                <h2>Acerca de este artículo</h2>
                <p>Acerca de este artículo
Mejores térmicas: hemos abierto el panel superior para lograr una mejor eficiencia térmica. El panel perforado proporciona una mejor ventilación a medida que el aire caliente fluye a través de la parte superior del chasis.
Radiadores: la parte superior y delantera de la caja soportan radiadores de hasta 360 mm, mientras que el panel frontal puede acomodar tres ventiladores de 140 mm para una máxima refrigeración.
Construcción sencilla: agiliza el proceso de construcción con un sistema de gestión de cables mejorado. Los canales de cable más anchos proporcionan más espacio para enrutar fácilmente los cables, mientras que la adición de ganchos añade estabilidad.
Un aspecto moderno: el H7 combina el aspecto moderno de la serie H con nuevas opciones de color que encajan perfectamente con cualquier estética. Cada color se combina con un tinte de vidrio que complementa el chasis respectivo.
MÁS ESPACIO: El amplio espacio y la holgura hacen del H7 un chasis amplio para construcciones ambiciosas.</p>
            </div>
        </div>
    </div>

<footer>
    <p>Tiendas de marcas | ¿Cómo comprar? | Historial de pedidos | Configurador de PC | Garantías y devoluciones | Preguntas frecuentes | Quiénes somos | Condiciones generales | Aviso de privacidad | ¿Quieres ser proveedor? | Únete a nuestro equipo
    © 2024 - 2024 TechZone</p>
</footer>

</body>
</html>
