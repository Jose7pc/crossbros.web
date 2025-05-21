<?php

$host_db = "db676798010.db.1and1.com";
$user_db = "dbo676798010";
$pass_db = "GASI2015";
$db_name = "db676798010";
$tbl_name = "usuarios";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
    die("La conexion falló: " . $conexion->connect_error);
}

$idconfirm = $_GET[id];
$buscarUsuario = "SELECT * FROM $tbl_name
 WHERE confirmacion = '$idconfirm' ";

$result = $conexion->query($buscarUsuario);

$count = mysqli_num_rows($result);
$today = date("Y-m-d");  

if ($count > 0) {
    $query = "UPDATE `db676798010`.`usuarios`
           SET confirmacion = NULL
           WHERE confirmacion = '$idconfirm'";

    
    if ($conexion->query($query) === TRUE) {
            $mensaje="Tu correo ha sido confirmado";
            print "<script>alert('$mensaje')</script>";
            print("<script>window.location.replace('http://popol.es/index.html');</script>"); 
        
    } else {
        echo "Ocurrió un fallo al realizar la confirmación: " . $query . "<br>" . $conexion->error;
    }
} else {
        ?> No hemos podido confirmar el correo. Contacte con nosotros si el problema persiste
        <META HTTP-EQUIV="Redirect" CONTENT="2" URL=http://popol.es/index.html"> <?php
}


mysqli_close($conexion);
?>
