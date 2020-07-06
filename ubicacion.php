<?php

/*
* Esta función es para agregar ubicaciones a la base de datos
    * @param    Texto   Nombre de la ubicación
    * @param    Texto   Descripción de donde esta la ubicación
    * @param    Número  id de la sede
    * @return   número  1 para éxito, 0 para error 
*/

    function agregar_ubicacion($ubicacion, $descripcion, $id_sede){
        $salida=0;

        $conexion=mysqli_connect('localhost', 'root', '', 'control');

        $sql="INSERT INTO ubicaciones(ubicacion, descripcion, id_sede) " ;
        $sql.=" VALUES('$ubicacion','$descripcion', '$id_sede');";
        $conexion->query($sql);

        if(mysqli_affected_rows($conexion)){
            $salida=1;
        }

        return $salida;
    }



?>