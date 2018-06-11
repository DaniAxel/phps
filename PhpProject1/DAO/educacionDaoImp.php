<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of educacionDaoImp
 *
 * @author Axel
 */
class educacionDaoImp implements educacionDao{
    //put your code here
    public function listarTipo() {
         $lista = new ArrayObject();
        try {
            $pdo = new clasePDO();
            $stmt = $pdo->prepare("select * from educacion");

            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $value) {
                $dto = new educacion();
                $dto->setNivel_ed($value["nivel_ed"]);
                
                $lista->append($dto);
            }

            $pdo = null;
        } catch (Exception $ex) {
            echo "Error dao al listar todos: " . $ex->getMessage();
        }
        return $lista;
    }

}
