<?php
    //se resiven los datos de ingreso y se guardan
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];

    $usuario1='Vigilante';
    $contra1='vigilar';
    $usuario2='Administrador';
    $contra2='administrar';




   if($usuario==$usuario1 && $contraseña==$contra1){
    header("location: ../vista/bitacora.phtml");
   }if($usuario==$usuario2 && $contraseña==$contra2){
    header("location: casa.php");
   }else{
    echo "
    <script>
    alert('Su información ¡NO ES VALIDA!');
    window.location.href='../vista/ingreso.phtml';
    </script>
    ";
   }


?>