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
    <img src="./comida.png" style="width: 300px" class="w3-margin">
    <div class="w3-margin-top">
    <form action="mostrarMenu.php" method="post">
        <label for="opciones">Elija los pasos que desee para su almuerzo/cena: </label>
        <div class="opciones">
            <div class="opcion w3-margin-top">
                <input type="checkbox" class="w3-check" name="opciones[]" value="entrada">
                <label for="entrada">Entrada</label>
            </div>
            <div class="opcion w3-margin-top">
                <input type="checkbox" class="w3-check" name="opciones[]" value="plato_principal">
                <label for="plato_principal">Plato principal</label>
            </div>
            <div class="opcion w3-margin-top">
                <input type="checkbox" class="w3-check" name="opciones[]" value="acompañamiento">
                <label for="acompanamiento">Acompañamiento</label>
            </div>
            <div class="opcion w3-margin-top">
                <input type="checkbox" class="w3-check" name="opciones[]" value="postre">
                <label for="postre">Postre</label>
            </div>
        </div>
        <button type="submit" name="submit" class='w3-button w3-black w3-margin-top'>Enviar</button>
    </form>
    </div>
</div>
</body>
</html>
