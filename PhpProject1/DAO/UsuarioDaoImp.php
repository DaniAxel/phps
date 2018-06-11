<?php


include_once 'usuarioDao.php';
include_once '../BD/ClasePDO.php';
include_once '../DTO/usuario.php'; 

class UsuarioDaoImp implements usuarioDao{

    public function agregar($dto) {
        try {
            $pdo = new clasePDO();
            
            $stmt = $pdo->prepare("insert into usuario(rut,nombre,"
                    . "ape_paterno,ape_materno,contrasena) values(?,?,?,?,?)");
            
            $stmt->bindParam(1, $dto->getRut());
            $stmt->bindParam(2, $dto->getNombre());
            $stmt->bindParam(3, $dto->getApPaterno());
            $stmt->bindParam(4, $dto->getApMaterno());
            $stmt->bindParam(5, $dto->getContrasena());
            
            $stmt->execute();
            if($stmt->rowCount()>0){
            return true;
            }
            $pdo= Null;
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        }

    public function existeRut($rut) {
        try {
            $pdo = new clasePDO();
            
            $stmt = $pdo->prepare("select rut from usuario where rut=?");
            $stmt->bindParam(1, $rut);
            $stmt->execute();
                    $resultado = $stmt->fetchAll();
                    
                    if(count($resultado)>0){
                        return true;
                    }
                    $pdo= Null;
            
        } catch (Exception $exc) {
            echo "El rut no existe".$exc->getMessage();
        }
        return false;
        }

    public function modificar($dto) {
        
    }

}
