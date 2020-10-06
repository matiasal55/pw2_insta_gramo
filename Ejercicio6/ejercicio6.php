<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 6 - La Matrix... digo, Matriz</title>
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
    <h2>La Matrix... digo, Matriz</h2>
    <img src="./matrix.png" class="w3-margin" style="width: 300px">
    <div class="w3-margin-top">
        <form action="calcularMatriz.php" method="post">
            <label for="dimension">Ingrese la dimensión que tendrá la matriz cuadrada: </label>
            <input type="number" name="dimension" autofocus required placeholder="Ingrese un número">
            <button class="w3-button w3-black" type="submit" name="submit">Siguiente</button>
        </form>
    </div>
</div>
</body>
</html>