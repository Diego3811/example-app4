<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechZone</title>
    <link rel="stylesheet" href="{{ asset('css/styles2.css') }}">
    <script src="https://cdn.auth0.com/js/auth0/9.19/auth0.min.js"></script>
   
    <script>
        const auth0 = new auth0.WebAuth({
            domain: 'dev-zfktb7m4a2v7mgn4.us.auth0.com',
            clientID: 'lpwhevLC6grLyMd3GXtv29uHmWY5407f',
            redirectUri: 'http://localhost:8000/callback',   
            responseType: 'token id_token',
            scope: 'openid profile email'
        });

        function loginWithAuth0() {
            auth0.authorize();
        }
    </script>
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
            
            <!-- Mensajes de error -->
            @if ($errors->any())
                <div class="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form action="{{ route('store.form') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Nombre" required>
                <input type="text" name="apellidos" placeholder="Apellidos" required>
                <input type="email" name="email" placeholder="Correo Electrónico" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <input type="password" name="password_confirmation" placeholder="Confirmar Contraseña" required>
                <a href="javascript:void(0);" class="auth0-button" onclick="loginWithAuth0()">Iniciar Sesión con Auth0</a>
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
            <a href="javascript:void(0);" class="auth0-button" onclick="loginWithAuth0()">Iniciar Sesión con Auth0</a>
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
