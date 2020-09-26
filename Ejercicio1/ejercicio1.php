<?php
require_once './Ejercicio1.php';
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 1</title>
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
        <?php
        $archivos=scandir("./imagenes");
        if(sizeof($archivos)>2) {
            foreach ($archivos as $archivo) {
                if ($archivo !== "." && $archivo !== "..") {
                    $nombre = substr($archivo, 0, strripos($archivo, "_"));
                    echo "
                    <div class='w3-card' style='width:500px;margin: auto'>
                        <img src='./imagenes/$archivo' class='w3-image' style='width: 400px'>
                        <p>" . $nombre . "</p>
                    </div>";
                }
            }
        }
        else
            echo "
            <div>
                <img src='../files/noimages.png'>
                <p>No hay imágenes</p>
            </div>
            ";
        ?>
    </div>
    <div class="w3-center w3-padding-48">
        <?php
            $path_action="ejercicio1";
            $directorioFotos="./imagenes";
            include "./subirFotos.php";
        ?>
    </div>
</body>
</html>
