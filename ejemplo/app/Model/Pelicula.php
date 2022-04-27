<?php

namespace App\Model;

class Pelicula{
    public $titulo = "";

    public $genero = "";

    public $director = "";

    public $anioLanzamiento = "";

    public function __construct($til, $gen, $dir, $ani){
        $this->establecerTitulo($til);

        $this->establecerGenero($gen);

        $this->establecerDirector($dir);

        $this->establecerAnioLanzamiento($ani);
    }
    
    public function obtenerTitulo(){
        return $this->titulo;
    }

    public function establecerTitulo($til){
        $this->titulo = $til;
    }
    
    public function obtenerGenero(){
        return $this->genero;
    }

    public function establecerGenero($gen){
        $this->genero = $gen;
    }

    public function obtenerDirector(){
        return $this->director;
    }

    public function establecerDirector($dir){
        $this->director = $dir;
    }

    public function obtenerAnioLanzamiento(){
        return $this->anioLanzamiento;
    }

    public function establecerAnioLanzamiento($ani){
        $this->anioLanzamiento = $ani;
    }

}