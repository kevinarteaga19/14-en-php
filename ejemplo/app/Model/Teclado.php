<?php

namespace App\Model;

class Teclado{
    public $marca = "";

    public $color = "";

    public $tipo = "";

    public $precio = "";

    public function __construct($mar, $col, $tip, $pre){
        $this->establecerMarca($mar);

        $this->establecerColor($col);

        $this->establecerTipo($tip);

        $this->establecerPrecio($pre);

    }
    
    public function obtenerMarca(){
        return $this->marca;
    }

    public function establecerMarca($mar){
        $this->marca = $mar;
    }
    
    public function obtenerColor(){
        return $this->color;
    }

    public function establecerColor($col){
        $this->color = $col;
    }

    public function obtenerTipo(){
        return $this->tipo;
    }

    public function establecerTipo($tip){
        $this->tipo = $tip;
    }

    public function obtenerPrecio(){
        return $this->precio;
    }

    public function establecerPrecio($pre){
        $this->precio = $pre;
    }

}