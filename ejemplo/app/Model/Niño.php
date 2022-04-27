<?php

namespace App\Model;

class Niño{
    public $edad = "";

    public $nombre = "";

    public $apellido = "";

    public $dni = "";

    public function __construct($ed, $nom, $ape, $dn){
        $this->establecerEdad($ed);

        $this->establecerNombre($nom);

        $this->establecerApellido($ape);

        $this->establecerDni($dn);
    }
    
    public function obtenerEdad(){
        return $this->edad;
    }

    public function establecerEdad($ed){
        $this->edad = $ed;
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

    public function obtenerDni(){
        return $this->dni;
    }

    public function establecerDni($dn){
        $this->dni = $dn;
    }

}