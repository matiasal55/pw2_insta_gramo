<?php


if(isset($_POST['publicar'])) {
    if($ejercicio->verificarSubidaDeArchivo($_FILES['foto']['error'])) {
        $nombreFoto=$_FILES['foto']['name'];
        $nombreIngresado=$_POST['nombre'];
        $archivotmp=$_FILES['foto']['tmp_name'];
        $formato=end(explode(".",$nombreFoto));
        if($ejercicio->verificarFormato($nombreFoto)) {
            $ejercicio->moverArchivo($archivotmp,"./imagenes",$nombreIngresado,$formato);
        }
        else echo "El formato no corresponde a una fotografía";
    }
    else echo "No se pudo subir la foto";
}