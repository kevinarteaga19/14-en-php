<?php

namespace App\Model;

class Perro{
    public $color = "";

    public $raza = "";

    public $nombre = "";

    public $tamanio = "";

    public function __construct($col, $raz, $nom, $tam){
        $this->establecerColor($col);

        $this->establecerRaza($raz);

        $this->establecerNombre($nom);

        $this->establecerTamanio($tam);
    }
    
    public function obtenerColor(){
        return $this->color;
    }

    public function establecerColor($col){
        $this->color = $col;
    }
    
    public function obtenerRaza(){
        return $this->raza;
    }

    public function establecerRaza($raz){
        $this->raza = $raz;
    }

    public function obtenerNombre(){
        return $this->nombre;
    }

    public function establecerNombre($nom){
        $this->nombre = $nom;
    }

    public function obtenerTamanio(){
        return $this->tamanio;
    }

    public function establecerTamanio($tam){
        $this->tamanio = $tam;
    }

}