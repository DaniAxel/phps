<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="agregarPreApro.php" method="POST">
            <table border="0">
               
                <tbody>
                    <tr>
                        <td>Rut</td>
                        <td><input type="text" name="txtRut" value="" /></td>
                    </tr>
                    <tr>
                      
                    <tr>
                        <td>Fecha Nacimiento</td>
                        <td><input type="Date" name="DFecha" value="" /></td>
                    </tr>
                    <tr>
                        <td>Sexo</td>
                        <td><input type="radio" name="Sexo" value="M" />M
                            <input type="radio" name="Sexo" value="F" />F</td>
                    </tr>
                    <tr>
                        <td>Estado Civil</td>
                        <td><select name="Estado">
                                <option>Soltero</option>
                                <option>Casado</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td>Hijos</td>
                        <td><input type="txt" name="txtHijos" value="" /></td>
                    </tr>
                   
                    <tr>
                        <td>Telefono</td>
                        <td><input type="text" name="txtTelefono" value="" /></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="txtEmail" value="" /></td>
                    </tr>
                    <tr>
                        <td>Direccion</td>
                        <td><input type="text" name="txtDireccion" value="" /></td>
                    </tr>
                    <tr>
                        <td>Comuna</td>
                        <td><select name="cmbComunas">
                             <?php 
                                include_once '../dao/comunaDaoImp.php';
                                foreach (comunaDaoImp::listarComunas() as $value) {?>
                                    
                                <option><?php echo $value?></option>
                                <?php }?>
                                
                            </select></td>
                    </tr>
                    <tr>
                        <td>Educacion</td>
                        <td><select name="cmbEducacion">
                                
                                <option></option>
                                
                            </select></td>
                    </tr>
                    <tr>
                        <td>Renta</td>
                        <td><select name="cmbRenta">
                                
                                <option></option>
                                
                            </select></td>
                    </tr>
                    <tr>
                        <td>Sueldo Liquido</td>
                        <td><input type="text" name="txtSueldo" value="" /></td>
                    </tr>
                    <tr>
                        <td>Padece alguna enfermedad cronica</td>
                        <td><input type="checkbox" name="chkEnfermedades" value="off" /></td>
                    </tr>
                </tbody>
            </table>
            <input type="submit" value="Registrar" />
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
