<?php
/*
* Esta función es para agregar estados en los que puede encontrar un usuario
    * @param   Texto   Jornadas de los cursos
    * @return  número  1 para éxito, 0 para error 
    */

    function agregar_jornadas($jornada){
        $salida=0;

        $conexion=mysqli_connect('localhost', 'root', '', 'control');

        $sql="INSERT INTO jornadas_cursos( jornada_curso ) VALUES ('$jornada'); ";
        $conexion->query($sql);

        if(mysqli_affected_rows($conexion)){
            $salida=1; 
        }

        return $salida;
    }
