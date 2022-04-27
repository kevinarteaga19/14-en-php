<?php

namespace App\Model;

class Persona{
    public $nombre = "";

    public $apellido = "";

    public $estatura = "";

    public $nacionalidad = "";

    public $tipoSangre = "";

    public function __construct($nom, $ape, $est, $nac, $tip){
        $this->establecerNombre($nom);

        $this->establecerApellido($ape);

        $this->establecerEstatura($est);

        $this->establecerNacionalidad($nac);

        $this->establecerTipoSangre($tip);
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

    public function obtenerEstatura(){
        return $this->estatura;
    }

    public function establecerEstatura($est){
        $this->estatura = $est;
    }

    public function obtenerNacionalidad(){
        return $this->nacionalidad;
    }

    public function establecerNacionalidad($nac){
        $this->nacionalidad = $nac;
    }

    public function obtenerTipoSangre(){
        return $this->tipoSangre;
    }

    public function establecerTipoSangre($tip){
        $this->tipoSangre = $tip;
    }

}