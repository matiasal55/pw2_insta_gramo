<?php
require_once "./Matrix.php";
?>

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
    <?php
        if(isset($_POST['dimension']) && $_POST['dimension']!="") {
            $dimension = $_POST['dimension'];
            if($dimension>1){
                $matrix = new Matrix($dimension);
                $matrix->construirMatriz();
                $matriz=$matrix->getMatriz();
                $principal=$matrix->diagonalPrincipal();
                $secundaria=$matrix->diagonalSecundaria();
                $total=$matrix->sumarTodosLosValores();
                for($i=0;$i<sizeof($matriz);$i++){
                    echo "<p>";
                    foreach($matriz[$i] as $valor)
                        echo "<span class='w3-margin w3-padding w3-xxlarge' style='border: 2px solid blue;width:50px;height:50px'>$valor</span>";
                    echo "</p>";
                }
                echo "<p>Los valores de la diagonal primaria son:";
                foreach($principal as $index=>$valor) {
                    if($index%2==0)
                        $color="red";
                    else
                        $color="blue";
                    echo "<span style='color:".$color."'> $valor </span>";
                }
                echo "</p>";
                echo "<p>Los valores de la diagonal secundaria son:";
                foreach($secundaria as $index=>$valor) {
                    if($index%2==0)
                        $color="red";
                    else
                        $color="blue";
                    echo "<span style='color:".$color."'> $valor </span>";
                }
                echo "</p>";
                echo "<p>La suma total de todos los valores es: $total</p>";
            }
            else
                echo "<p>La dimensión debe ser mayor a 1</p>";
        }
        else
            echo "<p>No ha ingresado ningún valor</p>";
    ?>
    <p><a href="./ejercicio6.php"><<< Volver</a></p>
</div>
</body>
</html>