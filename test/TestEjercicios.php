<?php

require_once '../Ejercicio1/Ejercicio1.php';

class TestEjercicios extends PHPUnit\Framework\TestCase
{
    $ejercicio=new Ejercicio1();

    public function testVerificarFormato(){
        $nombre="imagen.jpg";
        $archivo="prueba.jpg";
        $this->assertTrue($this->ejercicio->moverArchivo($nombre));
    }
}