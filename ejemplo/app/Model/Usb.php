<?php

namespace App\Model;

class Usb{
    public $tamanio = "";

    public $marca = "";

    public $capacidad = "";

    public $color = "";

    public function __construct($tam, $mar, $cap, $col){
        $this->establecerTamanio($tam);

        $this->establecerMarca($mar);

        $this->establecerCapacidad($cap);

        $this->establecerColor($col);

    }
    
    public function obtenerTamanio(){
        return $this->tamanio;
    }

    public function establecerTamanio($tam){
        $this->tamanio = $tam;
    }
    
    public function obtenerMarca(){
        return $this->marca;
    }

    public function establecerMarca($mar){
        $this->marca = $mar;
    }

    public function obtenerCapacidad(){
        return $this->capacidad;
    }

    public function establecerCapacidad($cap){
        $this->capacidad = $cap;
    }

    public function obtenerColor(){
        return $this->color;
    }

    public function establecerColor($col){
        $this->color = $col;
    }

}