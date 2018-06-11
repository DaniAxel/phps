<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of comunaDaoImp
 *
 * @author Axel
 */
include_once '../DTO/comuna.php';
include_once '../DAO/comunaDao.php';
include_once '../BD/ClasePDO.php';

class comunaDaoImp implements comunaDao {

    public static  function listarComunas() {
        $lista = new ArrayObject();
        try {
            $pdo = new clasePDO();
            $stmt = $pdo->prepare("select nombre from comuna");

            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $value) {
                $dto = new comuna();
                $dto->setNombre($value["nombre"]);

                $lista->append($dto);
            }

            $pdo = null;
        } catch (Exception $ex) {
            echo "Error dao al listar todos: " . $ex->getMessage();
        }
        return $lista;
    }

    public function toComuna($nombre) {
        $id;
        try {
            $pdo = new clasePDO();
            $stmt = $pdo->prepare("select id from comuna where nombre=?");
            $stmt->bindParam(1, $nombre);
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $value) {
                $comuna = $value["id_co"];
            }
            $pdo = null;
        } catch (Exception $ex) {
            echo "Error dao al listar genero: " . $ex->getMessage();
        }
        return $id;
    }

}
