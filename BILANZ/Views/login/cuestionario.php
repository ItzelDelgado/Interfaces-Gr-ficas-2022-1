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
    <div class="cuestionario-container">
        <div class="cuestionario-format">
            <img src="/Assets/img/LOGO-Bilanz-1.svg" alt="">
            <h2>Cuál es tu objetivo?</h2>
            <button class="boton">Perde Peso</button>
            <button class="boton">Aumentar masa muscular</button>
            <button class="boton">Mantener peso</button>
        </div>

        <div class="cuestionario-format">
            <h2>¿Cuál es tu peso actual?</h2>
            <p>Puedes introducir tu peso aproximado.</p>
            <div class="flex">
                <input type="text" placeholder="e.g. 60 kg">
            </div>
        </div>

        <div class="cuestionario-format">
            <h2>Cuál es tu objetivo de peso?</h2>
            <input type="number" placeholder="e.g. 70kg">
        </div>

        <div class="cuestionario-format">
            <h2>¿Cuál es tu sexo?</h2>
            <div>
                <div>
                    <i class="fas fa-male"></i>
                    <button>Hombre</button>
                </div>
                <div>
                    <i class="fas fa-female"></i>
                    <button>Mujer</button>
                </div>
            </div>
        </div>

        <div class="cuestionario-format">
            <h2>¿Cuánto mides?</h2>
            <input type="number" placeholder="e.g. 170 cm">
        </div>
        <div class="cuestionario-format">
            <h2>¿Cuál es tu edad?</h2>
            <input type="number" placeholder="e.g. 20 años">
        </div>
        <form class="register-form" style="margin: 16px 0;">
            <a class="link-boton" href="/index.php">Adelante</a>
        </form>
    </div>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</body>

</html>