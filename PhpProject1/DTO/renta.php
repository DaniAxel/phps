<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of renta
 *
 * @author CETECOM
 */
class renta {
    
    private $id_ren;
    private $tipo_renta;
    
    function __construct() {
        $this->id_ren=0;
        $this->tipo_renta="";
        
    }
    function getId_ren() {
        return $this->id_ren;
    }

    function getTipo_renta() {
        return $this->tipo_renta;
    }

    function setId_ren($id_ren) {
        $this->id_ren = $id_ren;
    }

    function setTipo_renta($tipo_renta) {
        $this->tipo_renta = $tipo_renta;
    }

    public function __toString() {
        return "ID: ".$this->id_ren." "." Tipo Renta: ".$this->tipo_renta;
    }


}
