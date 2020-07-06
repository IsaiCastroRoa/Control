<?php

    /*
        * Esta función es para agregar estados en los que puede encontrar un usuario
    * @param   Texto   estados en los que puede estar el usuario
    * @return   número  1 para éxito, 0 para error 
    */

    function agregar_estados($estado){
        $salida=0;

        $conexion=mysqli_connect('localhost', 'root', '', 'control');

        $sql="INSERT INTO estados_usuarios( estado ) VALUES ('$estado'); ";
        $conexion->query($sql);

        if(mysqli_affected_rows($conexion)){
            $salida=1; 
        }
        return $salida;

    }
