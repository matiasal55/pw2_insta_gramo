<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 3 - Lanzar dados</title>
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
    <h2>Lanzar dados</h2>
    <?php
        require_once "./Dados.php";

        $cantidad=$_POST['cantidad'];
        $dados=new Dados();
        $suma=0;
        for($i=1;$i<=$cantidad;$i++){
            $random=$dados->obtenerNumeroRandom();
            $suma+=$random;
            echo "<img src='./dados/dados0".$random.".png' class='w3-margin' style='width: 256px'>";
        }
        echo "<h3>Resultado obtenido: ".$suma."</h3><p><a href='./ejercicio3.php'><<< Volver</a> </p>";
    ?>
</div>
</body>
</html>