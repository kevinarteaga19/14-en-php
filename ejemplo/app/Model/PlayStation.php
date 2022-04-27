<?php

namespace App\Model;

class PlayStation{
    public $color = "";

    public $coleccion = "";

    public $almacenamiento = "";

    public $tamanio = "";

    public function __construct($col, $cole, $alm, $tam){
        $this->establecerColor($col);

        $this->establecerColeccion($cole);

        $this->establecerAlmacenamiento($alm);

        $this->establecerTamanio($tam);

    }
    
    public function obtenerColor(){
        return $this->color;
    }

    public function establecerColor($col){
        $this->color = $col;
    }
    
    public function obtenerColeccion(){
        return $this->coleccion;
    }

    public function establecerColeccion($cole){
        $this->coleccion = $cole;
    }

    public function obtenerAlmacenamiento(){
        return $this->almacenamiento;
    }

    public function establecerAlmacenamiento($alm){
        $this->almacenamiento = $alm;
    }

    public function obtenerTamanio(){
        return $this->tamanio;
    }

    public function establecerTamanio($tam){
        $this->tamanio = $tam;
    }

}