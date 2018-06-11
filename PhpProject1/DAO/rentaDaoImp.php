<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of rentaDaoImp
 *
 * @author Axel
 */
class rentaDaoImp implements rentaDao{
    //put your code here
    public function listarRentas() {
         $lista = new ArrayObject();
        try {
            $pdo = new clasePDO();
            $stmt = $pdo->prepare("select * from renta");

            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $value) {
                $dto = new renta();
                $dto->setTipo_renta($value["tipo_renta"]);
                
                $lista->append($dto);
            }

            $pdo = null;
        } catch (Exception $ex) {
            echo "Error dao al listar todos: " . $ex->getMessage();
        }
        return $lista;
    }

}
