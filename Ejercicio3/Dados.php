<?php


class Dados
{
    public function obtenerNumeroRandom(){
        $numero=rand(1,6);
        return $numero;
    }
}