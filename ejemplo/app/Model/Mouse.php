<?php

namespace App\Model;

class Mouse{
    public $tamanio = "";

    public $color = "";

    public $marca = "";

    public $peso = "";

    public function __construct($tam, $col, $mar, $pes){
        $this->establecerTamanio($tam);

        $this->establecerColor($col);

        $this->establecerMarca($mar);

        $this->establecerPeso($pes);
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

    public function obtenerPeso(){
        return $this->peso;
    }

    public function establecerPeso($pes){
        $this->peso = $pes;
    }
}