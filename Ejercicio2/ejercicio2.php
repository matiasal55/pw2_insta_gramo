<?php
require_once '../Ejercicio1/Ejercicio1.php';

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 2</title>
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
    <h2>Imágenes</h2>
    <div class="w3-container">
    <?php
    $archivos=scandir("../Ejercicio1/imagenes");
    if(sizeof($archivos)>2) {
        echo "<ul class='w3-ul'>";
        foreach ($archivos as $archivo) {
            if ($archivo !== "." && $archivo !== "..") {
                $nombre = substr($archivo, 0, strripos($archivo, "_"));
                echo "<li class='w3-hover-blue'><a href='./mostrarimagen.php?imagen=".$archivo."'>".$nombre."</a></li>";
            }
        }
        echo "</ul>";
    }
    else
        echo "
            <div>
                <img src='../files/noimages.png' alt='no-images'>
                <p>No hay imágenes</p>
            </div>
            ";
    ?>
    </div>
</div>
<div class="w3-center">
    <?php
    $path_action="ejercicio2";
    $directorioFotos="../Ejercicio1/imagenes";
    include "../Ejercicio1/subirFotos.php";
    ?>
</div>
</body>
</html>
