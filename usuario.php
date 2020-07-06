<?php
/*
    * Esta función es para agregar usuarios a la base de datos
    * @param    Texto   Nombre del usuario
    * @param    Número  id del tipo de documento del usuario
    * @param    Número  id del rol del usuario
    * @param    Texto   Documento del usuario
    * @param    Número  id del estado del usuario
    * @param    Número  id del curso del usuario
    * @return   número  1 para éxito, 0 para error 
    */
  


    function agregar_usuario($nombre, $id_tipo_documento, $id_rol, $documento, $id_estado, $id_curso){
        $salida=0;
        
        $conexion=mysqli_connect('localhost', 'root', '', 'control');
        
        $sql="INSERT INTO usuarios(nombre, id_tipo_documento, id_rol, documento, id_estado, id_curso) ";
        $sql .=" VALUES('$nombre', '$id_tipo_documento', '$id_rol', '$documento', '$id_estado', '$id_curso');";
        $conexion->query($sql);

        if (mysqli_affected_rows($conexion)>0)
        { 
            $salida=1;
        }

        return $salida;
    }


