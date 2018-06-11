<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuario
 *
 * @author CETECOM
 */
class usuario {
    private $rut;
    private $nombre;
    private $apPaterno;
    private $apMaterno;
    private $contrasena;
    
    function __construct() {
        $this->rut="";
        $this->nombre="";
        $this->apPaterno="";
        $this->apMaterno="";
        $this->contrasena="";
    }
    function getRut() {
        return $this->rut;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApPaterno() {
        return $this->apPaterno;
    }

    function getApMaterno() {
        return $this->apMaterno;
    }

    function getContrasena() {
        return $this->contrasena;
    }

    function setRut($rut) {
        $this->rut = $rut;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApPaterno($apPaterno) {
        $this->apPaterno = $apPaterno;
    }

    function setApMaterno($apMaterno) {
        $this->apMaterno = $apMaterno;
    }

    function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
    }

    public function __toString() {
        return "Rut: ".$this->rut." "."Nombre: ".$this->nombre;
    }


}
