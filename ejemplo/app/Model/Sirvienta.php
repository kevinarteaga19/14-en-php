<?php

namespace App\Model;

class Sirvienta{
    public $nombre = "";

    public $apellido = "";

    public $edad = "";

    public $direccion = "";

    public function __construct($nom, $ape, $ed, $dir){
        $this->establecerNombre($nom);

        $this->establecerApellido($ape);

        $this->establecerEdad($ed);

        $this->establecerDireccion($dir);

    }
    
    public function obtenerNombre(){
        return $this->nombre;
    }

    public function establecerNombre($nom){
        $this->nombre = $nom;
    }
    
    public function obtenerApellido(){
        return $this->apellido;
    }

    public function establecerApellido($ape){
        $this->apellido = $ape;
    }

    public function obtenerEdad(){
        return $this->edad;
    }

    public function establecerEdad($ed){
        $this->edad = $ed;
    }

    public function obtenerDireccion(){
        return $this->direccion;
    }

    public function establecerDireccion($dir){
        $this->direccion = $dir;
    }

}