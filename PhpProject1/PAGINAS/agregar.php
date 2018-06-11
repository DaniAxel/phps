<?php

include_once '../DTO/usuario.php';
include_once '../DAO/UsuarioDaoImp.php';


$dto = new usuario();
$rut = trim($_POST["txtRut"]);
$dao = new UsuarioDaoImp();
$dto->setRut($rut);
$dto->setNombre($_POST["txtNombre"]);
$dto->setApMaterno($_POST["txtApMat"]);
$dto->setApPaterno(trim($_POST["txtApPat"]));
if ($_POST["txtContra"] == $_POST["txtRepContra"]) {
    $dto->setContrasena(trim($_POST["txtContra"]));
    if ($dao->existeRut($rut)) {
        echo "<script>alert('Rut existe'  )</script>";
    } else {
        session_start();
        $dao->agregar($dto);
        echo "<script>alert('Se agrego Usuario'  )</script>";
    }
} else {
    echo "<script>alert('Error al introducir contraseña'  )</script>";
}


include_once 'paginaAgregarUsuario.php';
