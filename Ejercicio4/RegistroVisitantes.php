<?php

class RegistroVisitantes
{
    private $archivo;
    private $planeta;
    private $nombre;

    public function __construct($archivo,$nombre,$planeta)
    {
        $this->archivo=$archivo;
        $this->nombre=$nombre;
        $this->planeta=strtolower($planeta);
    }

    public function extraerDatos(){
        if(file_get_contents($this->archivo)) {
            $json=file_get_contents($this->archivo);
            $datos = json_decode($json, true);
            return $datos;
        }
        return false;
    }

    public function grabarDatos($datos){
        $fp=fopen($this->archivo,"w");
        if($fp) {

            fwrite($fp, json_encode($datos));
            fclose($fp);

            return true;
        }
        return false;
    }

    public function getVisitantes(){
        $datos=$this->extraerDatos();
        if($datos) {
            $visitantes=[];
            foreach($datos as $dato){
                $visitantes[]=$dato;
            }
            return $visitantes;
        }
        return false;
    }

    public function totalVisitantes(){
        $datos=$this->getVisitantes();
        if(sizeof($datos)>0){
            $total=0;
            foreach($datos as $dato){
                if($dato['planeta']!="tierra")
                    $total++;
            }
            return $total;
        }
        return 0;
    }

    public function guardarVisita(){
        $visitas=$this->extraerDatos();
        if($visitas) {
            array_push($visitas,["nombre"=>$this->nombre,"planeta"=>$this->planeta]);
            if($this->grabarDatos($visitas))
                return true;
            return false;
        }
        return false;
    }

    public function crearArchivo(){
        $estructura=[["nombre"=>$this->nombre,"planeta"=>$this->planeta]];

        if($this->grabarDatos($estructura))
            return true;
        return false;
    }

    public function registrarVisita(){
        if(!file_exists($this->archivo)) {
            if(!$this->crearArchivo())
                return false;
            return true;
        }
        if($this->guardarVisita())
            return true;
        return false;
    }
}
