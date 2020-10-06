<?php
    require_once "./RegistroVisitantes.php";
?>

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
    <div>
        <img src="./planetas/sol.png" class="w3-margin-bottom" style="width: 100px">
    </div>
    <?php
        if($_POST['nombre']!="" && isset($_POST['planeta'])) {
            $nombre=$_POST['nombre'];
            $planeta = $_POST['planeta'];
            $archivo="./visitas.json";
            $registro=new RegistroVisitantes($archivo,$nombre,$planeta);
            if($registro->registrarVisita()) {
                $visitantes = $registro->getVisitantes();
                $total = $registro->totalVisitantes();
                if($visitantes) {
                    if($total>0) echo "<p>Visitantes intergalácticos</p>";
                    foreach ($visitantes as $visitante) {
                        if(strtolower($visitante['planeta'])!="tierra")
                            echo "<p>" . $visitante['nombre'] . "</p>";
                    }
                    echo "<p>Cantidad total de visitantes intergaláticos: $total </p>";
                }
                else echo "<p>Error de archivo</p>";
            }
            else echo "<p>No se pudo registrar la visita</p>";

        }
        else
            echo "<h2>Petición erronea</h2>";
    ?>
    <a href='./ejercicio4.php'><<< Volver</a>
</div>
</body>
</html>