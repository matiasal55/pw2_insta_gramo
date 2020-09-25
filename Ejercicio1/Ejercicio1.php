<?php


class Ejercicio1
{
    public function verificarSubidaDeArchivo($archivo){
        if($archivo>0)
            return false;
        return true;
    }

    public function verificarFormato($archivo){
        if(strpos($archivo,"jpg") || strpos($archivo,"jpeg") || strpos($archivo,"png"))
            return true;
        return false;
    }

    public function moverArchivo($temporal,$carpeta,$nombre,$formato){
        $fecha=new DateTime();
        $timestamp=$fecha->getTimestamp();
        $nuevaRuta="$carpeta/$nombre"."_"."$timestamp.$formato";
        move_uploaded_file($temporal,$nuevaRuta);
        return $nuevaRuta;
    }
}