<?php
error_reporting(E_ALL & ~E_NOTICE);
require_once './Ejercicio1.php';

$ejercicio=new Ejercicio1();
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
    <div class="w3-container w3-center">
        <?php
        $archivos=scandir("../imagenes");
        foreach($archivos as $archivo) {
            if ($archivo !== "." && $archivo !== "..") {
                $nombre = explode("_", $archivo);
                echo "
                <div class='w3-card' style='width:500px;margin: auto'>
                    <img src='../imagenes/$archivo' class='w3-image' style='width: 400px'>
                    <p>$nombre[0]</p>
                </div>";
            }
            }
        ?>
    </div>
    <div class="w3-center">
        <h3>Subir foto</h3>
        <form action="./ejercicio1.php" method="POST" enctype="multipart/form-data">
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre">
            <label for="foto">Foto: </label>
            <input type="file" name="foto">
            <button type="submit" name="publicar">Publicar</button>
            <p>
                <?php
                    include './message.php';
                ?>
            </p>
        </form>
    </div>
</body>
</html>
