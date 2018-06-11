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
        <form action="agregar.php" method="POST">
            <table border="0">
                
                <tbody>
                    <tr>
                        <td>Rut</td>
                        <td><input type="text" name="txtRut" value="" required /></td>
                    </tr>
                    <tr>
                        <td>Nombre</td>
                        <td><input type="text" name="txtNombre" value="" /></td>
                    </tr>
                    <tr>
                        <td>Apellido Materno</td>
                        <td><input type="text" name="txtApMat" value="" /></td>
                    </tr>
                    <tr>
                        <td>Apellido Paterno</td>
                        <td><input type="text" name="ApPat" value="" /></td>
                    </tr>
                    <tr>
                        <td>Contraseña</td>
                        <td><input type="text" name="txtContra" value="" /></td>
                    </tr>
                    <tr>
                        <td>Repetir Contraseña</td>
                        <td><input type="text" name="txtRepContra" value="" /></td>
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
