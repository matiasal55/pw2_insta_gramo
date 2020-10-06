<?php

require_once '../Ejercicio1/Ejercicio1.php';
require_once "../Ejercicio4/RegistroVisitantes.php";
require_once "../Ejercicio5/Menu.php";
require_once "../Ejercicio6/Matrix.php";

class TestEjercicios extends PHPUnit\Framework\TestCase
{
    // Ejercicio 1
    public function testVerificarFormato(){
        $ejercicio=new Ejercicio1();
        $nombre="imagen.jpg";
        $obtenido=$ejercicio->verificarFormato($nombre);
        $this->assertTrue($obtenido);
    }

    // Ejercicio 4
    private $archivo="./prueba.json";
    private $nombre="Matias";
    private $tierra="Tierra";
    private $saturno="Saturno";

    public function testGrabarArchivoDePrueba(){
        $datos=[["nombre"=>$this->nombre,"planeta"=>$this->tierra]];
        $ejercicio=new RegistroVisitantes($this->archivo,$this->nombre,$this->tierra);
        $obtenido=$ejercicio->grabarDatos($datos);
        $this->assertTrue($obtenido);
    }

    public function testRegistrarVisita(){
        $ejercicio=new RegistroVisitantes($this->archivo,$this->nombre,$this->saturno);
        $obtenido=$ejercicio->registrarVisita();
        $this->assertTrue($obtenido);
    }

    public function testExtraerDatos(){
        $ejercicio=new RegistroVisitantes($this->archivo,$this->nombre,$this->tierra);
        $obtenido=!$ejercicio->extraerDatos();
        $this->assertFalse($obtenido);
    }

    public function testCantidadDeVisitantes(){
        $ejercicio=new RegistroVisitantes($this->archivo,$this->nombre,$this->tierra);
        $obtenido=$ejercicio->totalVisitantes();
        $this->assertNotEquals(0,$obtenido);
    }

    // Ejercicio 5

    private $menu_correcto="../Ejercicio5/menu.ini";

    public function testExtraerMenu(){
        $correcto=new Menu($this->menu_correcto);
        $obtenido=!$correcto->extraerMenu();
        $this->assertFalse($obtenido);
    }

    public function testExtraerMenuIncorrecto(){
        $menu="../Ejercicio5/men.ini";
        $incorrecto=new Menu($menu);
        $obtenido=$incorrecto->extraerMenu();
        $this->assertFalse($obtenido);
    }

    public function testDatosCorrectos(){
        $ejercicio=new Menu($this->menu_correcto);
        $menuTest=[
            "entrada"=>"Snacks",
            "plato_principal"=>"Milanesa",
            "acompañamiento"=>"Papas fritas",
            "postre"=>"helado"
        ];
        $menuObtenido=$ejercicio->extraerMenu();
        $this->assertEquals($menuTest,$menuObtenido);
    }

    public function testDatosIncorrectos(){
        $ejercicio=new Menu($this->menu_correcto);
        $menuTest=[
            "entrada"=>"Picada de cocido y queso",
            "plato_principal"=>"Vacío",
            "acompañamiento"=>"Papas fritas",
            "postre"=>"Flan"
        ];
        $menuObtenido=$ejercicio->extraerMenu();
        $this->assertNotEquals($menuTest,$menuObtenido);
    }

    public function testPlatoExistente(){
        $ejercicio=new Menu($this->menu_correcto);
        $paso="entrada";
        $contenido=$ejercicio->extraerMenu();
        $obtenido=$ejercicio->pasoExistente($paso,$contenido);
        $this->assertTrue($obtenido);
    }

    public function testPlatoInexistente(){
        $ejercicio=new Menu($this->menu_correcto);
        $paso="trago";
        $contenido=$ejercicio->extraerMenu();
        $obtenido=$ejercicio->pasoExistente($paso,$contenido);
        $this->assertFalse($obtenido);
    }

    // Ejercicio 6
    private $matriz=[[1,2],[3,4]];


    public function testDiagonalPrincipal(){
        $matrix=new Matrix(2);
        $matrix->setMatriz($this->matriz);
        $esperado=[1,4];
        $obtenido=$matrix->diagonalPrincipal();
        $this->assertEquals($esperado,$obtenido);
    }

    public function testDiagonalSecundaria(){
        $matrix=new Matrix(2);
        $matrix->setMatriz($this->matriz);
        $esperado=[2,3];
        $obtenido=$matrix->diagonalSecundaria();
        $this->assertEquals($esperado,$obtenido);
    }

    public function testSumarMatriz(){
        $matrix=new Matrix(2);
        $matrix->setMatriz($this->matriz);
        $esperado=10;
        $obtenido=$matrix->sumarTodosLosValores();
        $this->assertEquals($esperado,$obtenido);
    }
}