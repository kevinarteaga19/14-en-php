<?php

namespace App\Model;

class Ropa{
    public $color = "";

    public $marca = "";

    public $tipoTela = "";

    public $tipoPrenda = "";

    public function __construct($col, $mar, $tipt, $tipp){
        $this->establecerColor($col);

        $this->establecerMarca($mar);

        $this->establecerTipoTela($tipt);

        $this->establecerTipoPrenda($tipp);

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

    public function obtenerTipoTela(){
        return $this->tipoTela;
    }

    public function establecerTipoTela($tipt){
        $this->tipoTela = $tipt;
    }

    public function obtenerTipoPrenda(){
        return $this->tipoPrenda;
    }

    public function establecerTipoPrenda($tipp){
        $this->tipoPrenda = $tipp;
    }

}