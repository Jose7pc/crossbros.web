<?php

$host_db = "db676798010.db.1and1.com";
$user_db = "dbo676798010";
$pass_db = "GASI2015";
$db_name = "db676798010";
$tbl_name = "users";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
}

$idconfirm = $_GET[id];
$buscarUsuario = "SELECT * FROM $tbl_name
 WHERE confirmacion = '$idconfirm' ";

$result = $conexion->query($buscarUsuario);

$count = mysqli_num_rows($result);
$today = date("Y-m-d");  

if ($count > 0) {
    $query = "UPDATE `db676798010`.`users`
           SET confirmacion = NULL
           WHERE confirmacion = '$idconfirm'";

    
    if ($conexion->query($query) === TRUE) {
            $mensaje="Email activated";
            print "<script>alert('$mensaje')</script>";
            print("<script>window.location.replace('http://popol.es/index.html');</script>"); 
        
    } else {
        echo "There has been a failure while processing your subscription: " . $query . "<br>" . $conexion->error;
    }
} else {
        ?> There has been a failure activating this email. Contact us if problem persists
        <META HTTP-EQUIV="Redirect" CONTENT="2" URL=http://popol.es/index.html"> <?php
}


mysqli_close($conexion);
?>
