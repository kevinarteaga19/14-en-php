<?php

namespace App\Model;

class Usuario{
    public $nombre = "";

    public $email = "";

    public $password = "";

    public function __construct($nom){
        $this->establecerNombre($nom);
    }
    
    public function obtenerNombre(){
        return $this->nombre;
    }

    public function establecerNombre($nom){
        $this->nombre = $nom;
    }

}