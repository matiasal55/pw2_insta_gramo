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
        <img src="./dados/dados00.png" style="width: 300px" class="w3-margin">
        <div class="w3-margin-top">
            <form action="lanzarDados.php" method="post">
                <label for="opciones">Elija la cantidad de dados a lanzar: </label>
                <select name="cantidad" required>
                    <option selected disabled>Elija cantidad</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
                <button name="submit" class='w3-button w3-black' type="submit">Lanzar dados</button>
            </form>
        </div>
    </div>
</body>
</html>