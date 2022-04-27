<?php

namespace App\Model;

class Planeta{
    public $color = "";

    public $numeroSatelites = "";

    public $nombre = "";

    public function __construct($col, $num, $nom){
        $this->establecerColor($col);

        $this->establecerNumeroSatelites($num);

        $this->establecerNombre($nom);

    }
    
    public function obtenerColor(){
        return $this->color;
    }

    public function establecerColor($col){
        $this->color = $col;
    }
    
    public function obtenerNumeroSatelites(){
        return $this->numeroSatelites;
    }

    public function establecerNumeroSatelites($num){
        $this->numeroSatelites = $num;
    }

    public function obtenerNombre(){
        return $this->nombre;
    }

    public function establecerNombre($nom){
        $this->nombre = $nom;
    }

}