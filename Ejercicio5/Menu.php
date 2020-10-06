<?php


class Menu
{
    private $menu;

    public function __construct($menu)
    {
        $this->menu=$menu;
    }

    public function extraerMenu(){
        if(file_exists($this->menu)){
            $platos = parse_ini_file($this->menu);
            return $platos;
        }
        return false;
    }

    public function pasoExistente($paso,$platos){
        if(array_key_exists(strtolower($paso),$platos))
            return true;
        return false;
    }
}