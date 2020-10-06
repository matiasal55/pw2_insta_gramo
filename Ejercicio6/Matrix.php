<?php


class Matrix
{
    private $dimension;
    private $matriz;

    public function __construct($dimension)
    {
        $this->dimension=$dimension;
    }

    public function construirMatriz(){
        $matriz=[];
        $valor=1;
        for($i=0;$i<$this->dimension;$i++){
            $fila=[];
            for($j=0;$j<$this->dimension;$j++)
                array_push($fila,$valor++);
            array_push($matriz,$fila);
        }
        $this->matriz=$matriz;
    }

    public function getMatriz(){
        return $this->matriz;
    }

    public function setMatriz($matriz){
        $this->matriz=$matriz;
    }

    public function diagonalPrincipal(){
        $resultado=[];
        for ($i = 0; $i < $this->dimension; $i++)
            array_push($resultado, $this->matriz[$i][$i]);
        return $resultado;
    }

    public function diagonalSecundaria(){
            $resultado=[];
            for ($i = 0; $i < $this->dimension; $i++)
                array_push($resultado, $this->matriz[$i][sizeof($this->matriz) - 1 - $i]);
            return $resultado;
    }

    public function sumarTodosLosValores(){
        $resultado=0;
        foreach($this->matriz as $fila)
            $resultado+=array_sum($fila);
        return $resultado;
    }
}