<?php

include_once '../DTO/preAprovacion.php';
include_once '../DAO/comunaDaoImp.php';
include_once '../DAO/educacionDaoImp.php';
include_once '../DAO/rentaDaoImp.php';


$dto= new preAprovacion();

$dao= new preAprovacionDaoImp();
$daoCom=new comunaDaoImp();
$daoEd=new educacionDaoImp();
$daoRen=new rentaDaoImp();


$dto->setUsuarioRut($_POST["txtRut"]);
$dto->setFecha_nacimiento(trim($_POST["DFecha"]));
$dto->setSexo(trim($_POST["Sexo"]));
if ($_POST["Sexo"] == "M") {
        $dto->setSexo('M');
    } elseif ($_POST["Sexo"] == "F") {
        $dto->setSexo('F');
    }
$dto->setEstadoCivil(trim($_POST["Estado"]));
if ($_POST["Estado"] == "Soltero") {
        $dto->setEstadoCivil("Soltero");
    } elseif ($_POST["Estado"] == "Casado") {
        $dto->setEstadoCivil("Casado");
    }

$dto->setHijos(trim($_POST["txtHijos"]));
$dto->setTelefono($_POST["txtTelefono"]);
$dto->setEmail($_POST["txtEmail"]);
$dto->setDireccion($_POST["txtDireccion"]);



$dto->setSueldo($_POST["txtSueldo"]);
$dto->setEnfermedadCronica($_POST["chkEnfermedades"]);