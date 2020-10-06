<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 4 - Contador de visitas... extraterrestres</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div>
    <?php
    $directorio="..";
    include '../files/header.php';
    ?>
</div>
<div class="w3-center w3-padding-48">
    <h2>Contador de visitas... extraterrestres</h2>
    <img src="./planetas/astronauta.png" style="width: 300px;" class="w3-margin">
    <div class="w3-margin-top">
        <form action="contador_visitas.php" method="post">
            <div class="w3-margin-bottom">
                <label for="nombre">Ingrese su nombre: </label>
                <input type="text" name="nombre">
            </div>
            <div class="w3-margin-bottom">
                <label for="planeta">Indique de qué planeta viene: </label>
                <select name="planeta" required>
                    <option selected disabled>Elija planeta</option>
                    <option>Jupiter</option>
                    <option>Marte</option>
                    <option>Mercurio</option>
                    <option>Neptuno</option>
                    <option>Saturno</option>
                    <option>Tierra</option>
                    <option>Urano</option>
                    <option>Venus</option>
                </select>
            </div>
            <button name="submit" class='w3-button w3-black' type="submit">Sumar visitante</button>
        </form>
    </div>
</div>
</body>
</html>