<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 2 - Insta-reciclado</title>
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
    <h2>Insta-reciclado</h2>
    <?php
    $imagen=$_GET['foto'];
    if(file_exists("../Ejercicio1/imagenes/".$imagen))
        echo "<img src='../Ejercicio1/imagenes/".$imagen."' width='500px'>";
    else
        echo "<div><img src='../files/errorimage.png' alt='error-imagen'><h2>La imagen no fue encontrada</h2> </div>";
    ?>
    <p>
        <a href="./ejercicio2.php"><<< Volver</a>
    </p>
</div>
</body>
</html>

