<?php

$ejercicio=new Ejercicio1();

echo "<h3>Subir foto</h3><form action='./".$path_action.".php' method='POST' enctype='multipart/form-data'>
    <label for='nombre'>Nombre: </label>
    <input type='text' name='nombre'>
    <label for='foto'>Foto: </label>
    <input type='file' name='foto'>
    <button type='submit' name='publicar'>Publicar</button>
</form>";

if(isset($_POST['publicar'])) {
    if($ejercicio->verificarSubidaDeArchivo($_FILES['foto']['error'])) {
        $nombreFoto=$_FILES['foto']['name'];
        $nombreIngresado=$_POST['nombre'];
        $archivotmp=$_FILES['foto']['tmp_name'];
        $formato=end(explode(".",$nombreFoto));
        if($ejercicio->verificarFormato($nombreFoto)) {
            $ejercicio->moverArchivo($archivotmp,$directorioFotos,$nombreIngresado,$formato,$path_action);
            echo "<p>Foto subida con éxito</p>";
        }
        else echo "<p>El formato no corresponde a una fotografía</p>";
    }
    else echo "<p>No se pudo subir la foto</p>";
}