<?php

namespace App\Model;

class Router{
    public $tamanio = "";

    public $color = "";

    public $marca = "";

    public $ip = "";

    public function __construct($tam, $col, $mar, $i){
        $this->establecerTamanio($tam);

        $this->establecerColor($col);

        $this->establecerMarca($mar);

        $this->establecerIp($i);

    }
    
    public function obtenerTamanio(){
        return $this->tamanio;
    }

    public function establecerTamanio($tam){
        $this->tamanio = $tam;
    }
    
    public function obtenerColor(){
        return $this->color;
    }

    public function establecerColor($col){
        $this->color = $col;
    }

    public function obtenerMarca(){
        return $this->marca;
    }

    public function establecerMarca($mar){
        $this->marca = $mar;
    }

    public function obtenerIp(){
        return $this->ip;
    }

    public function establecerIp($i){
        $this->ip = $i;
    }

}