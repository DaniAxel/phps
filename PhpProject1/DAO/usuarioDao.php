<?php


interface usuarioDao{
    
    public function existeRut($rut);
    public function agregar($dto);
    public function modificar($rut);
    
    
}
