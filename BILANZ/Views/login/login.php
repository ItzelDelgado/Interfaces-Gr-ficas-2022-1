<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Assets/css/style.css">
</head>

<body>
    <div class="login-page">
        <img src="/Assets/img/LOGO-Bilanz-1.svg" alt="">
        <div class="form-login">
            <form class="register-form">
                <input type="text" placeholder="Nombre" />
                <input type="password" placeholder="Contraseña" />
                <input type="text" placeholder="Dirección Email" />
                <a class="link-boton" href="/Views/login/cuestionario.php">crear</a>
                <p class="message">Ya tienes cuenta? <a href="#">Login</a></p>
            </form>
            <form class="login-form">
                <input type="text" placeholder="Nombre" />
                <input type="password" placeholder="Contraseña" />
                <a class="link-boton" href="/index.php">Login</a>
                <p class="message">Estas realmente registrado? <a href="#">Crear cuenta</a></p>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="/Assets/js/login.js"></script>
</body>

</html>