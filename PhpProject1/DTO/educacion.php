<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of educacion
 *
 * @author CETECOM
 */
class educacion {
    private $id_ed;
    private $nivel_ed;
    
    function __construct() {
        $this->id_ed=0;
        $this->nivel_ed="";
        
    }

    
    
    function getId_ed() {
        return $this->id_ed;
    }

    function getNivel_ed() {
        return $this->nivel_ed;
    }

    function setId_ed($id_ed) {
        $this->id_ed = $id_ed;
    }

    function setNivel_ed($nivel_ed) {
        $this->nivel_ed = $nivel_ed;
    }
    public function __toString() {
        return "ID: ".$this->id_ed." "." Nivel: ".$this->nivel_ed;
    }



}
