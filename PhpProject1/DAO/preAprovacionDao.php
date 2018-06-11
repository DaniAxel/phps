<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Axel
 */
interface preAprovacionDao {
    public function agregar($dto);
    public function modificar($rut);
    public function eliminar($rut);
}
