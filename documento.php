<?php
    /*
    * Esta función guarda los tipos de documentos
    * @param    número  id del tipo de documento
    * @param    Texto   el tipo de documento
    * @return   número  1 para éxito, 0 para error 
    */
  

    function tipos_de_documento($id_tipo_documento, $tipo_documento)
    {
        $salida = 0;

        $conexion= mysqli_connect('localhost','root','', 'control');
        $sql = "INSERT INTO tipos_documentos(id_tipo_documento, tipo_documento) ";
        $sql .= " VALUES('$id_tipo_documento', '$tipo_documento'); ";
        $conexion->query($sql);

        if (mysqli_affected_rows($conexion)>0)
        {
            $salida=1;
        }

        return $salida;
    }


?>