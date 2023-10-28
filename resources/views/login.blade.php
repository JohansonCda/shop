<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión</title>
    <style>
        /* Estilos globales */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f0db;
            color: #1d2221;
            margin: 0;
            padding: 0;
        }

        /* Estilos para el contenedor principal */
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f0db;
            border: 1px solid #1d2221;
            margin-top: 100px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        /* Estilos para el formulario de inicio de sesión */
        .login-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .login-form h1 {
            margin-bottom: 30px;
            color: #d67535;
        }

        .login-form input {
            padding: 10px;
            margin-bottom: 10px;
            width: 100%;
            border: none;
            border-bottom: 1px solid #1d2221;
            outline: none;
        }

        .login-form input[type="submit"] {
            background-color: #d67535;
            color: #f9f0db;
            cursor: pointer;
            padding: 10px;
            border: none;
            outline: none;
        }

        .login-form input[type="submit"]:hover {
            background-color: #1d2221;
        }

        .login-form p {
            margin-top: 20px;
            text-align: center;
            color: #1d2221;
        }

        /* Estilos para el pie de página */
        .footer {
            background-color: #1d2221;
            padding: 20px;
            color: #f9f0db;
            text-align: center;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <form class="login-form" method="post" action="/login">
            <h1>Iniciar sesión</h1>
            <input type="email" name="email" placeholder="Correo electrónico" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <input type="submit" value="Iniciar sesión">
            <p>¿No tienes una cuenta? <a href="/registro">Regístrate</a></p>
        </form>
    </div>
    <div class="footer">
        <p>Todos los derechos reservados &copy; 2023</p>
    </div>
</body>
</html>
