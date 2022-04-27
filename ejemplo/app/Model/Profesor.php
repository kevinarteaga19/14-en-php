<?php

namespace App\Model;

class Profesor{
    public $nombre = "";

    public $codigo = "";

    public $asignatura = "";

    public function __construct($nom, $cod, $asi){
        $this->establecerNombre($nom);

        $this->establecerCodigo($cod);

        $this->establecerAsignatura($asi);

    }
    
    public function obtenerNombre(){
        return $this->nombre;
    }

    public function establecerNombre($nom){
        $this->nombre = $nom;
    }
    
    public function obtenerCodigo(){
        return $this->codigo;
    }

    public function establecerCodigo($cod){
        $this->codigo = $cod;
    }

    public function obtenerAsignatura(){
        return $this->asignatura;
    }

    public function establecerAsignatura($asi){
        $this->asignatura = $asi;
    }

}