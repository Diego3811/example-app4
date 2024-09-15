<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechZone</title>
    <link rel="stylesheet" href="{{ asset('css/styles2.css') }}">
    <style>
        .form-section {
            display: none;
        }
        .form-section.active {
            display: block;
        }
    </style>
</head>
<body>

<div class="header">
    <div class="logo-container">
        <div class="logo-background">
            <img src="{{ asset('img/TechZone_Logo_Dark.png') }}" alt="TechZone Logo" class="logo">
        </div>
    </div>
    <div class="header-actions">
        <div class="login-register">
            <a href="#" class="login" onclick="showLogin()">Inicio de Sesión</a>
            <a href="#" class="register" onclick="showRegister()">Registro</a>
        </div>
        <div class="cart">
            <img src="{{ asset('img/cart.png') }}" alt="Carrito de Compras">
        </div>
    </div>
</div>

<div class="form-container">
    <!-- Formulario de registro -->
    <div class="form-section active" id="register-form">
        <h2>CREAR UNA NUEVA CUENTA</h2>
        <div class="form-box">
            <img src="{{ asset('img/TechZone_Logo_Dark.png') }}" alt="TechZone Logo" class="logo">
            <h3>Registro de nuevo usuario</h3>
            <form action="{{ route('store.form') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Nombre" required>
                <input type="text" name="apellidos" placeholder="Apellidos" required>
                <input type="email" name="correo" placeholder="Correo Electrónico" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <input type="password" name="password_confirmation" placeholder="Confirmar Contraseña" required>
                <button type="submit">Registrarme</button>
            </form>
            <p>¿Ya tienes una cuenta? <a href="#" onclick="showLogin()">Iniciar Sesión</a></p>
        </div>
    </div>

    <!-- Formulario de inicio de sesión -->
    <div class="form-section" id="login-form">
        <h2>INICIAR SESIÓN</h2>
        <div class="form-box">
            <img src="{{ asset('img/TechZone_Logo_Dark.png') }}" alt="TechZone Logo" class="logo">
            <h3>¡Bienvenido de nuevo!</h3>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <input type="text" name="username" placeholder="Nombre de Usuario" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <a href="#">¿Olvidaste tu Contraseña?</a>
                <button type="submit">Ingresar</button>
            </form>
            <p>¿No tienes una cuenta? <a href="#" onclick="showRegister()">Registrarme</a></p>
        </div>
    </div>
</div>

<footer>
    <p>Tiendas de marcas | ¿Cómo comprar? | Historial de pedidos | Configurador de PC | Garantías y devoluciones | Preguntas frecuentes | Quiénes somos | Condiciones generales | Aviso de privacidad | ¿Quieres ser proveedor? | Únete a nuestro equipo
    © 2024 - 2024 TechZone</p>
</footer>

<script>
    function showLogin() {
        document.getElementById('register-form').classList.remove('active');
        document.getElementById('login-form').classList.add('active');
    }

    function showRegister() {
        document.getElementById('login-form').classList.remove('active');
        document.getElementById('register-form').classList.add('active');
    }
</script>

</body>
</html>
