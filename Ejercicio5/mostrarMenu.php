<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 5 - ConociendINIs</title>
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
    <h2>ConociendINIs... con el Menú no saludable</h2>
    <?php
    require_once "./Menu.php";
    if(isset($_POST["opciones"]))
    {
        echo "<img src='./comida.png' style='width: 300px' class='w3-margin'>";
        $valores = $_POST['opciones'];
        $archivo="./menu.ini";
        $menu=new Menu($archivo);
        $platos = $menu->extraerMenu();
        if($platos) {
            foreach ($valores as $plato) {
                if ($menu->pasoExistente($plato, $platos)) {
                    echo "<p>" . $plato . " = " . $platos[$plato] . "</p>";
                }
            }
        }
        else echo "<p>Error de archivo</p>";
    }
    else
        echo "<p>No se ingresó ninguna opción</p>"
    ?>
    <a href="./ejercicio5.php"><<< Volver</a>
</div>
</body>
</html>