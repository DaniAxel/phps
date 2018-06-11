<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of preAprovacion
 *
 * @author CETECOM
 */
class preAprovacion {
    
    private $id;
    private $usuarioRut;
    private $fecha_nacimiento;
    private $sexo;
    private $estadoCivil;
    private $hijos;
    private $telefono;
    private $email;
    private $direccion;
    private $id_comuna;
    private $id_renta;
    private $id_educacion;
    private $sueldo;
    private $enfermedadCronica;
    
    function __construct() {
        $this->id=0;
        $this->usuarioRut="";
        $this->fecha_nacimiento=null;
        $this->sexo='';
        $this->estadoCivil="";
        $this->hijos=0;
        $this->telefono=0;
        $this->email="";
        $this->direccion="";
        $this->id_comuna=0;
        $this->id_renta=0;
        $this->id_educacion=0;
        $this->sueldo=0;
        $this->enfermedadCronica=false;
    }
    function getId() {
        return $this->id;
    }

    function getUsuarioRut() {
        return $this->usuarioRut;
    }

    function getFecha_nacimiento() {
        return $this->fecha_nacimiento;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getEstadoCivil() {
        return $this->estadoCivil;
    }

    function getHijos() {
        return $this->hijos;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getEmail() {
        return $this->email;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getId_comuna() {
        return $this->id_comuna;
    }

    function getId_renta() {
        return $this->id_renta;
    }

    function getId_educacion() {
        return $this->id_educacion;
    }

    function getSueldo() {
        return $this->sueldo;
    }

    function getEnfermedadCronica() {
        return $this->enfermedadCronica;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUsuarioRut($usuarioRut) {
        $this->usuarioRut = $usuarioRut;
    }

    function setFecha_nacimiento($fecha_nacimiento) {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setEstadoCivil($estadoCivil) {
        $this->estadoCivil = $estadoCivil;
    }

    function setHijos($hijos) {
        $this->hijos = $hijos;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setId_comuna($id_comuna) {
        $this->id_comuna = $id_comuna;
    }

    function setId_renta($id_renta) {
        $this->id_renta = $id_renta;
    }

    function setId_educacion($id_educacion) {
        $this->id_educacion = $id_educacion;
    }

    function setSueldo($sueldo) {
        $this->sueldo = $sueldo;
    }

    function setEnfermedadCronica($enfermedadCronica) {
        $this->enfermedadCronica = $enfermedadCronica;
    }
    public function __toString() {
        return "ID: ".$this->id." "."Sueldo: ".$this->sueldo;
    }



}
