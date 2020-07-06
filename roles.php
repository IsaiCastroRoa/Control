<?php
/*
* Esta función es para agregar el rol que puede tener un usuario o cliente
    * @param   Texto   Roles de los clientes o usuarios
    * @return  número  1 para éxito, 0 para error 
    */

    function agregar_jornadas($rol){
        $salida=0;

        $conexion=mysqli_connect('localhost', 'root', '', 'control');

        $sql="INSERT INTO roles( rol ) VALUES ('$rol'); ";
        $conexion->query($sql);

        if(mysqli_affected_rows($conexion)){
            $salida=1; 
        }

        return $salida;
    }
